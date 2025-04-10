<?php

declare(strict_types=1);

namespace BVP\AmagasakiScraper\Tests;

/**
 * @author shimomo
 */
final class ScraperCoreDataProvider
{
    /**
     * @return array
     */
    public static function scrapeCommentsProvider(): array
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

    /**
     * @return array
     */
    public static function scrapeForecastsProvider(): array
    {
        return [
            [
                'arguments' => [1, '2025-04-10'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '転覆の影響が出ている感じの片橋は再調整が必要だが豪快戦に期待。中村が良くなっていて地元インで一発。永井、丹下に展開を突ける舟足。鈴木、池田も悪くない。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '123/456',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['3-1=4', '3-1=5', '3-4=5', '1-3-4', '1-3-5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['3-1=4', '3-1=5', '3-4=5', '1-3-4', '1-3-5'],
                    'jlc_yesterday_course_label' => 'JLC予想 前日コース',
                    'jlc_yesterday_course' => '123456',
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' =>['3-4-5', '3-5-4', '3-4-2', '3-5-2', '3-2-4'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' =>[],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' =>['3-4-5', '3-5-4', '3-4-2', '3-5-2', '3-2-4'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '85%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '特訓の中村はいい感じの行き足。一人F持ちだがSは決まっていた。片橋は力強さが感じられないがSさえ行けば勝負になる。しっかりついていく池田の差しに注意したいが丹下、鈴木の回り足が良く展開を突く。ついていく永井も圏内。',
                    'reporter_today_course_label' => '記者予想 当日コース',
                    'reporter_today_course' => '123/456',
                ],
            ],
            [
                'arguments' => [3, '2025-04-10'],
                'expected' => [
                    'reporter_yesterday_comment_label' => '記者予想 前日コメント',
                    'reporter_yesterday_comment' => '難解戦だが出足は悪くない間嶋が前ヅケして巧走。汐崎はカドなら自力アタック。桐本がシャープに運ぶ。吉村はパワフルに仕上がっていて一発。柴田はインS集中。',
                    'reporter_yesterday_course_label' => '記者予想 前日コース',
                    'reporter_yesterday_course' => '162/345',
                    'reporter_yesterday_focus_label' => '記者予想 前日フォーカス',
                    'reporter_yesterday_focus' => ['6-3=4', '6-3=5', '6-4=5', '3-6-4', '3-6-5'],
                    'reporter_yesterday_focus_exacta_label' => '記者予想 前日フォーカス 2連単',
                    'reporter_yesterday_focus_exacta' => [],
                    'reporter_yesterday_focus_trifecta_label' => '記者予想 前日フォーカス 3連単',
                    'reporter_yesterday_focus_trifecta' => ['6-3=4', '6-3=5', '6-4=5', '3-6-4', '3-6-5'],
                    'jlc_yesterday_course_label' => 'JLC予想 前日コース',
                    'jlc_yesterday_course' => '126345',
                    'jlc_yesterday_focus_label' => 'JLC予想 前日フォーカス',
                    'jlc_yesterday_focus' =>['4-6-5', '4-5-6', '6-4-5', '6-5-4', '5-4-6'],
                    'jlc_yesterday_focus_exacta_label' => 'JLC予想 前日フォーカス 2連単',
                    'jlc_yesterday_focus_exacta' =>[],
                    'jlc_yesterday_focus_trifecta_label' => 'JLC予想 前日フォーカス 3連単',
                    'jlc_yesterday_focus_trifecta' =>['4-6-5', '4-5-6', '6-4-5', '6-5-4', '5-4-6'],
                    'jlc_yesterday_reliability_label' => 'JLC予想 前日信頼度',
                    'jlc_yesterday_reliability' => '80%',
                    'reporter_today_comment_label' => '記者予想 当日コメント',
                    'reporter_today_comment' => '特訓から進入が騒がしく波乱ムードだが行き足系統は汐崎、吉村がいい感じ。両者実戦足も良く2人を軸にして買いたい。柴田はそう伸びられる感じはなくインS五分なら…。桐本、間嶋、松下は出ていくことはないが回り足は悪くない。',
                    'reporter_today_course_label' => '記者予想 当日コース',
                    'reporter_today_course' => '12364/5',
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public static function scrapeTimesProvider(): array
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
