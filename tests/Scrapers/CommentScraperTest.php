<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests\Scrapers;

use BVP\AmagasakiScraper\Scrapers\CommentScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class CommentScraperTest extends TestCase
{
    /**
     * @var \BVP\AmagasakiScraper\Scrapers\CommentScraper
     */
    protected CommentScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new CommentScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(CommentScraperDataProvider::class, 'scrapeProvider')]
    public function testScrape(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrape(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFound(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\Scrapers\CommentScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://boatrace-amagasaki.jp/modules/yosou/group-syussou.php?day=20250407&race=1'."
        );

        $this->scraper->scrape(1, '2025-04-07');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\Scrapers\BaseScraper::__call() - " .
            "Call to undefined method 'BVP\AmagasakiScraper\Scrapers\BaseScraper::ghost()'."
        );

        $this->scraper->ghost(3, '2025-04-07');
    }
}
