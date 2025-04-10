<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class TimeScraperDataProvider
{
    /**
     * @return array
     */
    public static function scrapeProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-04-10'],
                'expected' => [
                    'boat_number_1_racer_name' => '中村将隆',
                    'boat_number_1_racer_exhibition_time' => 6.95,
                    'boat_number_1_racer_lap_time' => 37.20,
                    'boat_number_1_racer_turn_time' => 11.43,
                    'boat_number_2_racer_name' => '池田雷太',
                    'boat_number_2_racer_exhibition_time' => 6.93,
                    'boat_number_2_racer_lap_time' => 36.89,
                    'boat_number_2_racer_turn_time' => 11.29,
                    'boat_number_3_racer_name' => '片橋幸貴',
                    'boat_number_3_racer_exhibition_time' => 6.89,
                    'boat_number_3_racer_lap_time' => 36.73,
                    'boat_number_3_racer_turn_time' => 11.26,
                    'boat_number_4_racer_name' => '永井亮次',
                    'boat_number_4_racer_exhibition_time' => 6.93,
                    'boat_number_4_racer_lap_time' => 37.69,
                    'boat_number_4_racer_turn_time' => 11.79,
                    'boat_number_5_racer_name' => '丹下健',
                    'boat_number_5_racer_exhibition_time' => 6.93,
                    'boat_number_5_racer_lap_time' => 37.26,
                    'boat_number_5_racer_turn_time' => 11.70,
                    'boat_number_6_racer_name' => '鈴木柊介',
                    'boat_number_6_racer_exhibition_time' => 6.90,
                    'boat_number_6_racer_lap_time' => 37.30,
                    'boat_number_6_racer_turn_time' => 11.74,
                ],
            ],
            [
                'arguments' => [3, '2025-04-10'],
                'expected' => [
                    'boat_number_1_racer_name' => '柴田朋哉',
                    'boat_number_1_racer_exhibition_time' => 6.83,
                    'boat_number_1_racer_lap_time' => 36.85,
                    'boat_number_1_racer_turn_time' => 11.38,
                    'boat_number_2_racer_name' => '松下知幸',
                    'boat_number_2_racer_exhibition_time' => 6.92,
                    'boat_number_2_racer_lap_time' => 37.33,
                    'boat_number_2_racer_turn_time' => 11.55,
                    'boat_number_3_racer_name' => '汐崎正則',
                    'boat_number_3_racer_exhibition_time' => 6.93,
                    'boat_number_3_racer_lap_time' => 37.76,
                    'boat_number_3_racer_turn_time' => 11.79,
                    'boat_number_4_racer_name' => '桐本康臣',
                    'boat_number_4_racer_exhibition_time' => 6.89,
                    'boat_number_4_racer_lap_time' => 37.24,
                    'boat_number_4_racer_turn_time' => 11.51,
                    'boat_number_5_racer_name' => '吉村誠',
                    'boat_number_5_racer_exhibition_time' => 6.98,
                    'boat_number_5_racer_lap_time' => 37.26,
                    'boat_number_5_racer_turn_time' => 11.68,
                    'boat_number_6_racer_name' => '間嶋仁志',
                    'boat_number_6_racer_exhibition_time' => 6.94,
                    'boat_number_6_racer_lap_time' => 37.92,
                    'boat_number_6_racer_turn_time' => 11.88,
                ],
            ],
        ];
    }
}
