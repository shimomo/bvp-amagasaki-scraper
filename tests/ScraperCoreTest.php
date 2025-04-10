<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests;

use BVP\AmagasakiScraper\ScraperCore;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

/**
 * @author shimomo
 */
final class ScraperCoreTest extends TestCase
{
    /**
     * @var \BVP\AmagasakiScraper\ScraperCore
     */
    protected ScraperCore $scraper;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->scraper = new ScraperCore();
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeCommentsProvider')]
    public function testScrapeComments(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeComments(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeForecastsProvider')]
    public function testScrapeForecasts(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeForecasts(...$arguments));
    }

    /**
     * @param  array  $arguments
     * @param  array  $expected
     * @return void
     */
    #[DataProviderExternal(ScraperCoreDataProvider::class, 'scrapeTimesProvider')]
    public function testScrapeTimes(array $arguments, array $expected): void
    {
        $this->assertSame($expected, $this->scraper->scrapeTimes(...$arguments));
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInComments(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\Scrapers\CommentScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://boatrace-amagasaki.jp/modules/yosou/group-syussou.php?day=20250407&race=1'."
        );

        $this->scraper->scrapeComments(1, '2025-04-07');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInForecasts(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\Scrapers\ForecastScraper::scrape() - " .
            "The specified key '.z_comment' is not found in the content of the URL: " .
            "'https://boatrace-amagasaki.jp/modules/yosou/group-yosou.php?day=20250407&race=1'."
        );

        $this->scraper->scrapeForecasts(1, '2025-04-07');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenKeyNotFoundInTimes(): void
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\Scrapers\TimeScraper::scrape() - " .
            "The specified key '.com-rname' is not found in the content of the URL: " .
            "'https://boatrace-amagasaki.jp/modules/yosou/group-cyokuzen.php?day=20250407&race=1&kind=2'."
        );

        $this->scraper->scrapeTimes(1, '2025-04-07');
    }

    /**
     * @return void
     */
    public function testThrowsExceptionWhenMethodDoesNotExist(): void
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage(
            "BVP\AmagasakiScraper\ScraperCore::__call() - " .
            "Call to undefined method 'BVP\AmagasakiScraper\ScraperCore::ghost()'."
        );

        $this->scraper->ghost(1, '2025-04-07');
    }
}
