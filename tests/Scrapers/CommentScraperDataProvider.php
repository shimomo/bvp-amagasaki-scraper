<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests\Scrapers;

/**
 * @author shimomo
 */
final class CommentScraperDataProvider
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
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '直線はマシになって今なら中堅はある',
                    'boat_number_2_racer_name' => '池田雷太',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => 'ターンができるようになったし最悪は脱してます',
                    'boat_number_3_racer_name' => '片橋幸貴',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => '前半は良かったけど転覆でトルク感が落ちた',
                    'boat_number_4_racer_name' => '永井亮次',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '舟の向きはマシに感じるけど普通です',
                    'boat_number_5_racer_name' => '丹下健',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '行き足、回り足がいいし中上くらいあると思いますよ',
                    'boat_number_6_racer_name' => '鈴木柊介',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '悪くないし展開を突きたいです',
                ],
            ],
            [
                'arguments' => [3, '2025-04-10'],
                'expected' => [
                    'boat_number_1_racer_name' => '柴田朋哉',
                    'boat_number_1_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_1_racer_yesterday_comment' => '行き足が悪かったしパワーがない',
                    'boat_number_2_racer_name' => '松下知幸',
                    'boat_number_2_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_2_racer_yesterday_comment' => '出足一本で伸びがなくSにならない',
                    'boat_number_3_racer_name' => '汐崎正則',
                    'boat_number_3_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_3_racer_yesterday_comment' => '乗り心地も悪くないしスリットの雰囲気はいい感じ',
                    'boat_number_4_racer_name' => '桐本康臣',
                    'boat_number_4_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_4_racer_yesterday_comment' => '初日は威張れる感じの足だったが中堅より少しいい程度',
                    'boat_number_5_racer_name' => '吉村誠',
                    'boat_number_5_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_5_racer_yesterday_comment' => '出足、回り足はいいし回転不足でなければ伸びもいい',
                    'boat_number_6_racer_name' => '間嶋仁志',
                    'boat_number_6_racer_yesterday_comment_label' => '前日コメント',
                    'boat_number_6_racer_yesterday_comment' => '(記者評価・伸びは欠くが回り足は良好)',
                ],
            ],
        ];
    }
}
