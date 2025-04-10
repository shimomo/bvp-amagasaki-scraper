<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper;

/**
 * @author shimomo
 */
interface ScraperInterface extends ScraperContractInterface
{
    /**
     * @param  \BVP\AmagasakiScraper\ScraperCoreInterface
     * @return \BVP\AmagasakiScraper\ScraperInterface
     */
    public static function getInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @param  \BVP\AmagasakiScraper\ScraperCoreInterface
     * @return \BVP\AmagasakiScraper\ScraperInterface
     */
    public static function createInstance(?ScraperCoreInterface $scraperCore = null): ScraperInterface;

    /**
     * @return void
     */
    public static function resetInstance(): void;
}
