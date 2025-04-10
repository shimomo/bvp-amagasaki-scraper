<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests\Scrapers;

use BVP\AmagasakiScraper\Scrapers\ForecastScraper;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ForecastScraperTest extends TestCase
{
    /**
     * @var \BVP\AmagasakiScraper\Scrapers\ForecastScraper
     */
    protected ForecastScraper $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ForecastScraper();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ForecastScraperDataProvider::class, 'scrapeProvider')]
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
            "BVP\AmagasakiScraper\Scrapers\ForecastScraper::scrape() - " .
            "The specified key '.z_comment' is not found in the content of the URL: " .
            "'https://boatrace-amagasaki.jp/modules/yosou/group-yosou.php?day=20250407&race=1'."
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

        $this->scraper->ghost(1, '2025-04-07');
    }
}
