<?php
// ブログの取得
$rss = simplexml_load_file('https://saitama-rehabili.com/feed/');
$category_list = array();
// $news_cnt = 0;
foreach($rss->channel->item as $item){
    array_push($category_list, $item->category);
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

        <title>脳梗塞や脳出血の訪問リハビリなら、さいたま訪問リハビリセンター</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="埼玉県,さいたま市,脳梗塞,訪問リハビリ" />
        <meta name="Description" content="埼玉県内の多くの利用者様が改善を実感。健康保険適用の医療サービスだから1回400円程度で訪問リハビリが受けられます。障がい者1・2級の方は無料です" />

        <!-- mail -->
        <link rel="preload" as="style" href="mail/css/mailform.css" onload="this.rel='stylesheet'">
        <link rel="preload" as="style" href="mail/css/jquery.datetimepicker.css" onload="this.rel='stylesheet'">

        <!-- my style -->
        <link rel="stylesheet" href="css/common_220602.css">
        <link rel="stylesheet" href="css/style_220602.css">
        <link rel="stylesheet" href="css/responsive_22052001.css">

        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Graduate&family=Kameron&family=M+PLUS+Rounded+1c:wght@500;700;800;900&family=Noto+Sans+JP:wght@500;700;900&family=Sawarabi+Mincho&display=swap" rel="stylesheet">        
    </head>
    <body>
        <header class="bc_light_blue">
            <div class="header_width">
                <div id="header_left" class="d_flex m_plus_rounded_700">
                    <div class="color_blue">
                        <p class="fs_22 fs_18_sp">【さいたま県全域に対応】<br class="visible_640">脳梗塞や脳出血後遺症に<br class="visible_640">強い訪問リハビリ・マッサージ</p>
                        <a class="td_none color_blue" href="https://saitama-rehabili.com">
                            <div class="d_flex hidden_640_flex">
                                <div id="header_logo"><img src="img/logo.png" alt=""></div>
                                <div class="ta_center">
                                    <p class="fs_45">さいたま訪問リハビリセンター</p>
                                    <p class="fs_28">Saitama rehabilitation center</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div id="header_center" class="bc_blue hidden_960 m_plus_rounded_700">
                        <p class="color_white fs_67">0120-187-497</p>
                        <p class="color_white fs_30">（受付10:00~20:00／年中無休）<p>
                        <div onclick="location.href='#contact'" class="color_blue bc_white fs_26 ta_center">メールはこちらをクリック</div>
                    </div>
                    <div id="header_right">
                        <p class="color_blue fs_44 fs_17_sp ta_center mincho">MENU</p>
                        <div class="openbtn1"><span></span><span></span><span></span></div>
                    </div>
                    <nav id="g-nav">
                        <div id="g-nav-list">
                        <ul class="fs_30">
                        <li><a href="https://saitama-rehabili.com">トップ</a></li>
                        <?php
                            $category_list_unique = array_unique($category_list);
                            foreach($category_list_unique as $row){
                                echo ('<li><a href="https://saitama-rehabili.com/category/'.$row.'">'.$row.'</a></li>');
                            }
                        ?>
                        </ul>
                        </div>
                    </nav>
                </div>
                <a class="td_none color_blue" href="https://saitama-rehabili.com">
                    <div id="header_title_sp" class="visible_640 color_blue">
                        <div class="d_flex">
                            <div id="header_logo_sp"><img src="img/logo.png" alt=""></div>
                            <div class="ta_center">
                                <p class="fs_45 fs_23_sp">さいたま訪問リハビリセンター</p>
                            </div>
                        </div>
                        <p class="fs_17_sp ta_center">Saitama rehabilitation center</p>
                    </div>
                </a>
            </div>
        </header>

        <main>
            <!-- トップ -->
            <div id="top" class="">
                <div class="d_flex">
                    <div id="top_left">
                        <div id="top_left_blue" class="color_blue m_plus_rounded_700">
                            <p class="fs_62 fs_33_sp ta_center">＼埼玉県内全域対応／</p>
                            <p class="fs_33 fs_18_sp ws_nowrap ta_center">脳梗塞後遺症などでお困りの方、<br class="visible_640">お気軽にお問い合わせください</p>
                        </div>
                        <div id="top_left_square" class="d_flex color_white m_plus_rounded_700">
                            <div class="bc_red fs_33 fs_16_sp">脳梗塞後遺症</div>
                            <div class="bc_red fs_33 fs_16_sp">脊柱管狭窄相</div>
                            <div class="bc_red fs_33 fs_16_sp">パーキンソン病</div>
                        </div>
                        <div id="top_left_red_pc" class="color_red hidden_640 noto_sans_jp_700">
                            <div class="ws_nowrap">
                                <span class="fs_33">1回のリハビリが</span>
                                <span class="color_dark_red fs_58 noto_sans_jp_900">300〜400円</span>
                                <span class="fs_33">（１割負担の場合・交通費込）で受けられます。</span>
                            </div>
                            <p class="fs_62 ws_nowrap">※障がい者1級、2級の方は無料です</p>
                        </div>
                        <div id="top_left_circle">
                            <img src="img/four_circle_220519.png" alt="">
                        </div>
                        <div id="top_left_red_pc" class="color_red visible_640 noto_sans_jp_700">
                            <div class="ws_nowrap ta_center">
                                <span class="fs_16_sp">1回のリハビリが</span>
                                <span class="color_dark_red fs_29_sp noto_sans_jp_900">300〜400円</span>
                            </div>
                            <p class="fs_16_sp ta_center">（１割負担の場合・交通費込）で受けられます。</p>
                            <p class="fs_22_sp ta_center">※障がい者1級、2級の方は無料です</p>
                        </div>
                    </div>
                </div>
                <div id="top_bottom" class="d_flex hidden_640_flex">
                    <div onclick="location.href='tel:0120-187-497'"><img src="img/top_bottom_1.png" alt=""></div>
                    <div onclick="location.href='#contact'"><img src="img/top_bottom_2.png" alt=""></div>
                </div>
            </div>

            <!-- コロナ -->
            <div id="corona" class="bc_light_blue m_plus_rounded_700">
                <div class="bc_blue mw_960 ta_center">
                    <span class="color_white fs_41 fs_21_sp">さいたま訪問リハビリセンター</span>
                    <span class="color_white fs_36 fs_21_sp">では</span><br class="visible_640">
                    <span class="color_yellow fs_41 fs_21_sp">下記のコロナ対策を行っております。</span>
                </div>
                <div class="ta_center hidden_640 mw_960">
                    <img class="" src="img/corona_pc.png" alt="">
                </div>
                <div class="ta_center visible_640 mw_960">
                    <img class="" src="img/corona_sp.png" alt="">
                </div>
            </div>

            <!-- 新着情報 -->
            <div id="news_parent" class="bc_light_gray">
                <div class="bc_white mw_960">
                    <link rel="stylesheet" href="contents-maker/css/my_style_220527.css">
                    <p class="fs_42 fs_36_sp color_blue">What’s New</p>
                    <div id="news">
                        
                    </div>
                </div>
            </div>

            <script>
                // window.onload = function(){
                //     var contents_sp = document.getElementById('input-contents-sp-10');
                //     console.log(contents_sp);

                // }
                function show_contents(id){
                    if(id == 0){
                        return false;
                    }
                    console.log(id);
                    var contents = document.getElementById('input-contents-'+id);
                    var detail = document.getElementById('news-contents-detail-'+id);
                    var contents_sp = document.getElementById('input-contents-sp-'+id);
                    var detail_sp = document.getElementById('news-contents-detail-sp-'+id);
                    contents.style.display = 'block';
                    contents.style.WebkitLineClamp = '1000';
                    contents_sp.style.display = 'block';
                    contents_sp.style.WebkitLineClamp = '1000';

                    detail.style.display = 'none';
                    detail_sp.style.display = 'none';
                }
            </script>
            
            <!-- お任せください -->
            <div id="entrust" class="mincho">
                <div class="">
                    <div class="entrust_contents bc_light_pink">
                        <div class="mw_960">
                            <div class="color_red">
                                <span class="fs_68 fs_38_sp">脳梗塞後遺症専門</span>
                                <span class="fs_48 fs_24_sp">だから</span>
                                <span class="fs_68 fs_29_sp">安心してお任せ下さい</span>
                            </div>
                            <div class="d_flex">
                                <div class="hidden_640"><img src="img/doctors.png" alt=""></div>
                                <div>
                                    <p class="color_white bc_red fs_49 fs_24_sp ta_center">安心の2万件以上のリハビリ実績</p>
                                    <p class="fs_39 fs_22_sp ws_nowrap">
                                        脳梗塞、脳出血後遺症専門の<br>
                                        「さいたま訪問リハビリセンター」が、<br>
                                        あなたの悩みを解決し、リハビリを<br class="visible_640">サポートします
                                    </p>
                                </div>
                            </div>
                            <div class="visible_640"><img src="img/doctors.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <!-- 理由 -->
            <div id="reason">
                <div class="bc_blue">
                    <div>
                        <span class="color_white fs_56 fs_24_sp m_plus_rounded_700">さいたま訪問リハビリセンター<br class="visible_640"></span>
                        <span class="color_white fs_49 fs_24_sp m_plus_rounded_700">が選ばれる<br class="visible_640"></span>
                        <span class="color_yellow fs_127 fs_101_sp mincho">5</span>
                        <span class="color_yellow fs_56 fs_45_sp noto_sans_jp_700">つの</span>
                        <span class="color_yellow fs_70 fs_56_sp noto_sans_jp_700">理由</span>
                    </div>
                </div>
                <div class="reason_contents ta_center noto_sans_jp_900">
                    <div>
                        <span class="fs_56 fs_21_sp">理由</span>
                        <span class="color_blue fs_108 fs_41_sp komeron">1</span>
                    </div>
                    <p class="fs_35 fs_18_sp">機能訓練指導員のマッサージ師、<br class="visible_640">鍼灸師などのプロフェッショナルが勢揃い</p>
                    <p class="color_blue fs_48 fs_28_sp">スタッフ全員がリハビリの<br class="visible_640">国家資格保持者だから安心</p>
                    <div class="visible_640"><img src="img/reason_1.png" alt=""></div>
                </div>
                <div class="reason_contents ta_center noto_sans_jp_900">
                    <div>
                        <span class="fs_56 fs_21_sp">理由</span>
                        <span class="color_blue fs_108 fs_41_sp komeron">2</span>
                    </div>
                    <p class="fs_35 fs_18_sp">介護保険を一切使わずに、<br class="visible_640">リハビリやマッサージが受けられます</p>
                    <p class="color_blue fs_48 fs_28_sp">介護保険の訪問リハビリとの<br class="visible_640">併用も可能</p>
                    <div class="visible_640"><img src="img/reason_2.png" alt=""></div>
                </div>
                <div class="reason_contents ta_center noto_sans_jp_900">
                    <div>
                        <span class="fs_56 fs_21_sp">理由</span>
                        <span class="color_blue fs_108 fs_41_sp komeron">3</span>
                    </div>
                    <p class="fs_35 fs_18_sp">健康保険適用の医療サービスだから</p>
                    <p class="color_blue fs_48 fs_28_sp">１回のリハビリが<br class="visible_640">300円〜400円程度</p>
                    <div class="fs_26 fs_16_sp noto_sans_jp_700">*１割負担の場合・交通費込で受けられます。<br>*障がい者1級、2級の方は<span class="color_dark_red_2">無料</span>です</div>
                    <div class="visible_640"><img src="img/reason_3.png" alt=""></div>
                </div>
                <div class="reason_contents ta_center noto_sans_jp_900">
                    <div>
                        <span class="fs_56 fs_21_sp">理由</span>
                        <span class="color_blue fs_108 fs_41_sp komeron">4</span>
                    </div>
                    <p class="fs_35 fs_18_sp">「担当スタッフを変えてほしい」<br class="visible_640">などの要望も可能です。</p>
                    <p class="color_blue fs_48 fs_28_sp">女性のリハビリスタッフ在中</p>
                    <div class="visible_640"><img src="img/reason_4.png" alt=""></div>
                </div>
                <div class="reason_contents ta_center noto_sans_jp_900">
                    <div>
                        <span class="fs_56 fs_21_sp">理由</span>
                        <span class="color_blue fs_108 fs_41_sp komeron">5</span>
                    </div>
                    <p class="fs_35 fs_18_sp">埼玉県内ならどこにでもご訪問可能です。</p>
                    <p class="color_blue fs_48 fs_28_sp">ご自宅にも介護施設にも<br class="visible_640">ご訪問いたします</p>
                    <div class="visible_640"><img src="img/reason_1.png" alt=""></div>
                </div>
            </div>  

            <!-- 悩み -->
            <div id="worries" class="mincho">
                <div class="bc_blue color_white">
                    <div class="mw_960">
                        <span class="fs_49 fs_21_sp">お一人お一人に寄り添った</span><br class="visible_640">
                        <span class="fs_52 fs_26_sp">マンツーマンのリハビリ</span>
                        <span class="fs_37 fs_18_sp">だから<br class="visible_sp"></span>
                        <span class="fs_60 fs_28_sp">皆様のお悩みに対応します</span>
                    </div>
                </div>
                <div class="mw_960">
                    <div class="fs_38 fs_18_sp ws_nowrap hidden_640">
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <p>もっと、リハビリをしたい</p>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <p>保険が使えないリハビリは高額で<br class="visible_sp">受けられない</p>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <p>介護保険の都合で週2回しかリハビリが<br class="visible_sp">受けられない</p>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <p>1人でできる事が少なくなってきている</p>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <p>病院を退院して、これからどうしていいか<br class="visible_sp">わからない</p>
                            </div>
                        </div>
                    </div>

                    <div id="worries_sp" class="fs_38 fs_18_sp ws_nowrap visible_640">
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <span>もっと、リハビリをしたい</span>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <span>保険が使えないリハビリは高額で</span>
                            </div>
                        </div>
                        <div class="worries_second_line"><span>受けられない</span></div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <span>介護保険の都合で週2回しかリハビリが</span>
                            </div>
                        </div>
                        <div class="worries_second_line"><span>受けられない</span></div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <span>1人でできる事が少なくなってきている</span>
                            </div>
                        </div>
                        <div class="d_flex">
                            <div><img src="img/check.png" alt=""></div>
                            <div>
                                <span>病院を退院して、これからどうしていいか</span>
                            </div>
                        </div>
                        <div class="worries_second_line"><span>わからない</span></div>

                        <div id="nayami_sp" class="visible_640"></div>
                    </div>
                </div>
            </div>  

            <!-- 動画 -->
            <div id="movie" class="mw_960">
                <p class="color_blue ta_center fs_49 fs_24_sp noto_sans_jp_900">そんな、お悩みをお抱えの方にも<br class="visible_640">柔軟に対応いたします</p>
                <div class="hidden_640"><img src="img/movie_text.png" alt=""></div>
                <div class="visible_640"><img src="img/movie_text_sp.png" alt=""></div>
                <div class="d_flex">
                    <div class="">
                        <iframe src="https://www.youtube.com/embed/GEA_OYZSbI8" frameborder="0"></iframe>
                    </div>
                    <div class="">
                        <iframe src="https://www.youtube.com/embed/Av4sfsSIrzI" frameborder="0"></iframe>
                    </div>
                </div>
            </div> 

            <!-- 埼玉エリア -->
            <div id="saitama_area" class="mw_960">
                <div class="hidden_640 ta_center noto_sans_jp_700">
                    <span class="fs_91">埼玉</span>
                    <span class="fs_64">エリア</span>
                </div>
                <div class="color_blue">
                    <p class="fs_74 fs_30_sp mincho">
                        地域密着型の<br>
                        訪問リハビリマッサージ
                    </p>
                    <div>
                        <p class="fs_33 fs_17_sp noto_sans_jp_900">
                            当センターには、病院の先生から<br class="visible_640">「これ以上良くならない」<br class="visible_640">「歩くことは難しいのではないか？」と<br>
                            言われたケースでも、毎日リハビリを頑張る事に<br class="visible_640">よって社会復帰できたり、杖をついて歩けるように<br>
                            なったケースがあります。
                        </p>
                        <p class="visible_640 fs_26_sp">
                            だから諦めないでください！
                        </p>
                    </div>
                    <div>
                        <div class="visible_640 ta_center noto_sans_jp_700">
                            <span class="fs_91 fs_31_sp">埼玉</span>
                            <span class="fs_64 fs_22_sp">エリア</span>
                        </div>
                        <p class="fs_33 fs_17_sp noto_sans_jp_900">
                            「病院を退院して、これからどうしたらいいのか<br class="visible_640">わからない」<br>
                            「今の自分の状態からでも本当に良くなるのだろうか」<br class="visible_640">という方もお気軽にご相談ください。
                        </p>
                    </div>

                </div>
            </div> 

            <!-- 声 -->
            <div id="voice" class="bc_light_gray noto_sans_jp_900">
                <div class="color_blue ta_center mincho">
                    <p class="fs_53 fs_21_sp">実際にリハビリ・マッサージを受けた</p>
                    <span class="fs_41 fs_17_sp">たくさんの</span>
                    <span class="fs_92 fs_39_sp">お客さまの声</span>
                    <p class="fs_53 fs_18_sp">お喜びの声、続々ちょうだいしてます</p>
                    <div class="mw_960"><img src="img/voice_title_bottom.png" alt=""></div>
                </div>
                <div class="d_flex mw_960">
                    <div class="voice_contents">
                        <div class="bc_white">
                            <div><img src="img/voice_1.jpg" alt=""></div>
                            <div>
                                <p class="fs_26 fs_18_sp">ろれつが回らず、<br class="visible_640">途方にくれていた<br class="visible_640">日々が嘘のようです。</p>
                                <div class="hidden_640">
                                    <p class="fs_26 fs_21_sp color_blue">症状：脳梗塞</p>
                                    <p class="fs_26 fs_21_sp color_blue">佐々木 法子　（78歳）</p>
                                </div>
                            </div>
                        </div>
                        <div class="visible_640 bc_white">
                            <p class="visible_640 fs_21 fs_21_sp color_blue ta_center">症状：脳梗塞／佐々木 法子（78歳）</p>
                        </div>
                        <div class="bc_gray">
                            <p class="fs_24 fs_18_sp">
                                若くして脳梗塞になり、当時、教職員をしていたため、仕事にいけないことが苦痛で仕方ありませんでした。
                                自宅療養を重ねていても一向に回復することがなく、たまたま見つけた「さいたま訪問リハビリセンター」に問い合わせをし、週に３回リハビリを依頼したところ、徐々に症状が軽減してきたことに大変驚いてます。リハビリの凄さに驚くばかりです。
                            </p>
                        </div>
                    </div>
                    <div class="voice_contents">
                        <div class="bc_white">
                            <div><img src="img/voice_2.jpg" alt=""></div>
                            <div>
                                <p class="fs_26 fs_18_sp">孫の送り迎えだけが<br class="visible_640">わたしの生き甲斐でした。</p>
                                <div class="hidden_640">
                                        <p class="fs_26 fs_21_sp color_blue">症状：脳梗塞</p>
                                    <p class="fs_26 fs_21_sp color_blue">坂井 登（67歳）</p>
                                </div>
                            </div>
                        </div>
                        <div class="visible_640 bc_white">
                            <p class="visible_640 fs_21 fs_21_sp color_blue ta_center">症状：脳梗塞／坂井 登（67歳）</p>
                        </div>
                        <div class="bc_gray">
                            <p class="fs_24 fs_18_sp">
                                若くして脳梗塞になり、当時、教職員をしていたため、仕事にいけないことが苦痛で仕方ありませんでした。
                                自宅療養を重ねていても一向に回復することがなく、たまたま見つけた「さいたま訪問リハビリセンター」に問い合わせをし、週に３回リハビリを依頼したところ、徐々に症状が軽減してきたことに大変驚いてます。リハビリの凄さに驚くばかりです。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d_flex mw_960">
                    <div class="voice_contents">
                        <div class="bc_white">
                            <div><img src="img/voice_3.jpg" alt=""></div>
                            <div>
                                <p class="fs_26 fs_18_sp">働き盛りの中での病気<br class="visible_640">は精神的に辛いものがありました。</p>
                                <div class="hidden_640">
                                        <p class="fs_26 fs_21_sp color_blue">症状：脊柱管狭窄症</p>
                                    <p class="fs_26 fs_21_sp color_blue">吉岡 政宗　（69歳）</p>
                                </div>
                            </div>
                        </div>
                        <div class="visible_640 bc_white">
                            <p class="visible_640 fs_21 fs_21_sp color_blue ta_center">症状：脊柱管狭窄症／吉岡 政宗（69歳）</p>
                        </div>
                        <div class="bc_gray">
                            <p class="fs_24 fs_18_sp">
                                若くして脳梗塞になり、当時、教職員をしていたため、仕事にいけないことが苦痛で仕方ありませんでした。
                                自宅療養を重ねていても一向に回復することがなく、たまたま見つけた「さいたま訪問リハビリセンター」に問い合わせをし、週に３回リハビリを依頼したところ、徐々に症状が軽減してきたことに大変驚いてます。リハビリの凄さに驚くばかりです。
                            </p>
                        </div>
                    </div>
                    <div class="voice_contents">
                        <div class="bc_white">
                            <div><img src="img/voice_4.jpg" alt=""></div>
                            <div>
                                <p class="fs_26 fs_18_sp">放課後教室での子供<br class="visible_640">達への指導が何よりも楽しみでした。</p>
                                <div class="hidden_640">
                                        <p class="fs_26 fs_21_sp color_blue">症状：坐骨神経痛</p>
                                    <p class="fs_26 fs_21_sp color_blue">鈴木 法子　（81歳）</p>
                                </div>
                            </div>
                        </div>
                        <div class="visible_640 bc_white">
                            <p class="visible_640 fs_21 fs_21_sp color_blue ta_center">症状：坐骨神経痛／鈴木 法子（81歳）</p>
                        </div>
                        <div class="bc_gray">
                            <p class="fs_24 fs_18_sp">
                                若くして脳梗塞になり、当時、教職員をしていたため、仕事にいけないことが苦痛で仕方ありませんでした。
                                自宅療養を重ねていても一向に回復することがなく、たまたま見つけた「さいたま訪問リハビリセンター」に問い合わせをし、週に３回リハビリを依頼したところ、徐々に症状が軽減してきたことに大変驚いてます。リハビリの凄さに驚くばかりです。
                            </p>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- エリア -->
            <div id="area" class="ta_center">
                <div class="color_white bc_blue">
                    <p class="fs_44 fs_35_sp noto_sans_jp_700">どこまできてくれるの？</p>
                </div>
                <div class="mw_960 m_plus_rounded_700">
                    <p class="fs_75 fs_40_sp color_blue">埼玉県内全域対応</p>
                    <p class="fs_42 fs_21_sp color_blue">症状改善・軽減されたい方、<br class="visible_640">お気軽にお問い合わせください</p>
                    <div><img src="img/area_220519.png" alt=""></div>
                    
                    <table class="hidden_640 fs_18 noto_sans_jp_700">
                        <tr>
                            <td>さいたま市</td>
                            <td>川越市</td>
                            <td>熊谷市</td>
                            <td>川口市</td>
                            <td>行田市</td>
                            <td>秩父市</td>
                            <td>所沢市</td>
                            <td>飯能市</td>
                            <td>加須市</td>
                            <td>本庄市</td>
                        </tr>
                        <tr>
                            <td>東松山市</td>
                            <td>春日部市</td>
                            <td>狭山市</td>
                            <td>羽生市</td>
                            <td>鴻巣市</td>
                            <td>深谷市</td>
                            <td>上尾市</td>
                            <td>草加市</td>
                            <td>越谷市</td>
                            <td>蕨市</td>
                        </tr>
                        <tr>
                            <td>戸田市</td>
                            <td>入間市</td>
                            <td>朝霞市</td>
                            <td>志木市</td>
                            <td>和光市</td>
                            <td>新座市</td>
                            <td>桶川市</td>
                            <td>久喜市</td>
                            <td>北本市</td>
                            <td>八潮市</td>
                        </tr>
                        <tr>
                            <td>富士見市</td>
                            <td>三郷市</td>
                            <td>蓮田市</td>
                            <td>坂戸市</td>
                            <td>幸手市</td>
                            <td>鶴ヶ島市</td>
                            <td>日高市</td>
                            <td>吉川市</td>
                            <td>ふじみ野市</td>
                            <td>白岡市</td>
                        </tr>
                        <tr>
                            <td>郡伊奈町</td>
                            <td>三芳町</td>
                            <td>毛呂山町</td>
                            <td>越生町</td>
                            <td>滑川町</td>
                            <td>嵐山町</td>
                            <td>小川町</td>
                            <td>川島町</td>
                            <td>吉見町</td>
                            <td>鳩山町</td>
                        </tr>
                        <tr>
                            <td>ときがわ町</td>
                            <td>横瀬町</td>
                            <td>皆野町</td>
                            <td>長瀞町</td>
                            <td>小鹿野町</td>
                            <td>美里町</td>
                            <td>神川町</td>
                            <td>上里町</td>
                            <td>寄居町</td>
                            <td>宮代町</td>
                        </tr>
                        <tr>
                            <td>杉戸町</td>
                            <td>松伏町</td>
                            <td>東秩父村</td>
                            <!-- <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> -->
                        </tr>
                    </table>

                    <table class="visible_640 fs_18 noto_sans_jp_700">
                        <tr>
                            <td>さいたま市</td>
                            <td>川越市</td>
                            <td>熊谷市</td>
                            <td>川口市</td>
                            <td>行田市</td>
                            <td>秩父市</td>
                        </tr>
                        <tr>
                            <td>所沢市</td>
                            <td>飯能市</td>
                            <td>加須市</td>
                            <td>本庄市</td>
                            <td>東松山市</td>
                            <td>春日部市</td>
                        </tr>
                        <tr>
                            <td>狭山市</td>
                            <td>羽生市</td>
                            <td>鴻巣市</td>
                            <td>深谷市</td>
                            <td>上尾市</td>
                            <td>草加市</td>
                        </tr>
                        <tr>
                            <td>越谷市</td>
                            <td>蕨市</td>
                            <td>戸田市</td>
                            <td>入間市</td>
                            <td>朝霞市</td>
                            <td>志木市</td>
                        </tr>
                        <tr>
                            <td>和光市</td>
                            <td>新座市</td>
                            <td>桶川市</td>
                            <td>久喜市</td>
                            <td>北本市</td>
                            <td>八潮市</td>
                        </tr>
                        <tr>
                            <td>富士見市</td>
                            <td>三郷市</td>
                            <td>蓮田市</td>
                            <td>坂戸市</td>
                            <td>幸手市</td>
                            <td>鶴ヶ島市</td>
                        </tr>
                        <tr>
                            <td>日高市</td>
                            <td>吉川市</td>
                            <td>ふじみ野市</td>
                            <td>白岡市</td>
                            <td>郡伊奈町</td>
                            <td>三芳町</td>
                        </tr>
                        <tr>
                            <td>毛呂山町</td>
                            <td>越生町</td>
                            <td>滑川町</td>
                            <td>嵐山町</td>
                            <td>小川町</td>
                            <td>川島町</td>
                        </tr>
                        <tr>
                            <td>吉見町</td>
                            <td>鳩山町</td>
                            <td>ときがわ町</td>
                            <td>横瀬町</td>
                            <td>皆野町</td>
                            <td>長瀞町</td>
                        </tr>
                        <tr>
                            <td>小鹿野町</td>
                            <td>美里町</td>
                            <td>神川町</td>
                            <td>上里町</td>
                            <td>寄居町</td>
                            <td>宮代町</td>
                        </tr>
                        <tr>
                            <td>杉戸町</td>
                            <td>松伏町</td>
                            <td>東秩父村</td>
                        </tr>
                    </table>

                </div>
            </div> 

            <!-- 流れ -->
            <div id="use" class="bc_light_blue m_plus_rounded_700">
                <div class="d_flex mw_960">
                    <div class="bc_blue color_white fs_38 fs_35_sp">施術の流れ</div>
                    <div class="color_blue">
                        <div class="use_list">
                            <div class="fs_34 fs_20_sp d_flex">
                                <div>1. </div>
                                <div>お電話またはメールにて<br class="visible_640">お気軽にお問い合わせください。</div>
                            </div>
                            <div class="fs_34 fs_20_sp d_flex">
                                <div>2. </div>
                                <div>無料体験の日程を調整します。</div>
                            </div>
                            <div class="fs_34 fs_20_sp d_flex">
                                <div>3. </div>
                                <div>無料体験を実施します。</div>
                            </div>
                            <div class="fs_34 fs_20_sp d_flex">
                                <div>4. </div>
                                <div>施術ご希望の方は担当医に<br class="visible_640">「合意書」を記載していただきます。</div>
                            </div>
                            <div class="fs_34 fs_20_sp d_flex">
                                <div>5. </div>
                                <div>施術開始です。</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- 問い合わせリンク -->
            <div id="inquiry" class="mw_960">
                <div id="" class="d_flex hidden_640_flex">
                    <div class="ta_center">
                        <p class="fs_30">お電話でのご相談も随時受付中!(受付10:00~18:00 定休:日曜)</p>
                        <div onclick="location.href='tel:0120-187-497'"><img src="img/top_bottom_1.png" alt=""></div>
                    </div>
                    <div class="ta_center">
                        <p class="fs_30">メールでのお問合わせは365日24時間OK</p>
                        <div onclick="location.href='#contact'"><img src="img/top_bottom_2.png" alt=""></div>
                    </div>
                </div>
            </div> 

            <!-- 介護士 -->
            <div id="doctor" class="mw_960 noto_sans_jp_900">
                <div class="color_blue ta_center">
                    <p class="fs_47 fs_21_sp">皆さまのご自宅・介護施設へ</p>
                    <p class="fs_69 fs_26_sp">＼わたしたちがご訪問いたします／</p>
                </div>
                <div class="d_flex fs_21">
                    <div class="doctor_contents">
                        <div><img src="img/doctor_1.jpg" alt=""></div>
                        <div>
                            <p class="fs_16_sp">
                                痛みのない鍼灸を心がけます。<br>ご利用者さまの痛みをできるだけ軽減できるように努力します。
                            </p>
                            <div class="color_blue fs_18_sp hidden_640">
                                <p>リハビリ歴 5年</p>
                                <p>小堺 雪菜</p>
                            </div>
                            <div class="color_blue fs_18_sp visible_640">
                                <p>リハビリ歴 5年／小堺 雪菜</p>
                            </div>
                        </div>
                    </div>
                    <div class="doctor_contents">
                        <div><img src="img/doctor_2.jpg" alt=""></div>
                        <div>
                            <p class="fs_16_sp">
                                ガマンしないで生きてほしいと強く思っています。ご利用者さまの人生が良くなるように、全力でお手伝いいたします
                            </p>
                            <div class="color_blue fs_18_sp hidden_640">
                                <p>リハビリ歴 8年</p>
                                <p>鈴木 和也</p>
                            </div>
                            <div class="color_blue fs_18_sp visible_640">
                                <p>リハビリ歴 8年／鈴木 和也</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d_flex fs_21">
                    <div class="doctor_contents">
                        <div><img src="img/doctor_3.jpg" alt=""></div>
                        <div>
                            <p class="fs_16_sp">
                                自分らしく毎日を過ごすための第一歩は健康からです。<br>一緒にあなたにとっての〝理想の健康〟を築いていきましょう
                            </p>
                            <div class="color_blue fs_18_sp hidden_640">
                                <p>リハビリ歴 5年</p>
                                <p>木戸 義隆</p>
                            </div>
                            <div class="color_blue fs_18_sp visible_640">
                                <p>リハビリ歴 5年／木戸 義隆</p>
                            </div>
                        </div>
                    </div>
                    <div class="doctor_contents">
                        <div><img src="img/doctor_4.jpg" alt=""></div>
                        <div>
                            <p class="fs_16_sp">
                                ご利用者さまの立場になり、寄り添いたいと思ってます。どんなことでも遠慮なくご相談ください。
                            </p>
                            <div class="color_blue fs_18_sp hidden_640">
                                <p>リハビリ歴 5年</p>
                                <p>小網 美子</p>
                            </div>
                            <div class="color_blue fs_18_sp visible_640">
                                <p>リハビリ歴 5年／小網 美子</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- よくある質問 -->
            <div id="faq" class="mincho">
                <div class="title_blue">
                    <div class="d_flex mw_960">
                        <div class="color_blue">
                            <p class="fs_42 fs_27_sp">よくある質問</p>
                        </div>
                        <div class="color_blue">
                            <p class="fs_24 fs_14_sp">
                                こちらは質問の一例です。<br>
                                その他ご質問がある方はお気軽にお問い合わせ下さい。
                            </p>
                        </div>
                        <div class="color_white bc_blue fs_24 fs_16_sp ta_center" onclick="location.href='#contact'">
                            ご質問メールはこちら
                        </div>
                    </div>
                </div>
                <div class="mw_960 fs_32 fs_18_sp">
                    <div class="faq_contents">
                        <p class="color_blue">Q.1回の料金はいくら？</p>
                        <div>
                            1回あたりの料金は<span class="color_dark_red">300～500円程度</span>（1割負担の場合）になります。<br>
                            障害者手帳（1、2級）をお持ちの方は費用が<span class="color_dark_red">無料</span>にてご利用できます。
                        </div>
                    </div>
                    <div class="faq_contents">
                        <p class="color_blue">Q.訪問してもらう交通費はかかるの？</p>
                        <div>
                            交通費も料金に含まれています。交通費込みで<span class="color_dark_red">300～500円</span>（1割負担の場合）です。<br>
                            なお、<span class="color_dark_red">障がい者1、2級の方は、無料</span>です。
                        </div>
                    </div>
                    <div class="faq_contents">
                        <p class="color_blue">Q.1回の施術時間はどれくらい？</p>
                        <div>
                            1回あたり、おおよそ３０分程度になります。（症状や場合によって異なることがあります。）
                        </div>
                    </div>
                    <div class="faq_contents">
                        <p class="color_blue">Q.週に何回くらい受けると効果があるの？</p>
                        <div>
                            ほとんどの方がリハビリのやり方やペースを掴むために週に2～3回程度からはじめることをお勧めしています。<br>
                            そして、ご利用者様の状態を見て、回数を増やしたり、減らしたりしています。
                        </div>
                    </div>
                    <div class="faq_contents">
                        <p class="color_blue hidden_640">Q.介護施設内でも訪問施術マッサージが<br class="visible_640">受けられる？</p>
                        <p class="color_blue visible_640">Q.介護施設内でも訪問施術マッサージが<br class="visible_640">　 受けられる？</p>
                        <div>
                            特別養護老人ホームやグループホームや有料老人ホームなどでの施術も行っています。
                        </div>
                    </div>
                    <div class="faq_contents">
                        <p class="color_blue hidden_640">Q.脳梗塞・脳出血の後遺症以外でも<br class="visible_640">受けられるの？</p>
                        <p class="color_blue visible_640">Q.脳梗塞・脳出血の後遺症以外でも<br class="visible_640">　 受けられるの？</p>
                        <div>
                            もちろん可能です。パーキンソン病、筋萎縮性側索硬化症（ALS）、脊髄梗塞の方もリハビリ・マッサージを受けてられます。またその他の症状の方でも施術を受けられることがありますのでご相談ください。
                        </div>
                    </div>
                </div>
                <div class="mw_960">
                    <div>
                        <img src="img/faq_left.jpg" alt="">
                        <img class="visible_640" src="img/faq_center.jpg" alt="">
                        <img class="visible_640" src="img/faq_right.jpg" alt="">
                    </div>
                </div>
            </div> 

            <!-- プライバシーポリシー -->
            <div id="privacy_policy" class="noto_sans_jp_700">
                <div class="title_blue">
                    <div class="d_flex mw_960 color_blue">
                        <div class="fs_30 fs_24_sp">プライバシーポリシー</div>
                        <div class="fs_26 fs_14_sp">Privacy policy</div>
                    </div>
                </div>
                <section class="mw_960 fs_21 fs_16_sp">
                    <h2 class="txt_center hidden_640">プライバシーポリシー</h2>
                    <p>さいたま訪問リハビリセンター（以下「弊社」といいます）が、運営する当サイトにおける個人情報の取扱い、利用規約についてご説明いたします。</p>
                    <h3 class="title-2">1. 個人情報の収集・利用について</h3>
                    <p>弊社では、お客様に個人情報をご提供いただく場合があります。</p>
                    （WEB予約、お問い合わせ、その他）
                    <p>これらは、お客様へのサービス提供に必要な範囲内で適正・適法な方法によって取得し、サービスの提供、その他の正当な目的のために利用いたします。また、事前にお伝えした目的の範囲内でのみ利用し、お客様の同意を得ずに、他の目的で利用することはありません。</p>
                    <h3 class="title-2">2. 個人情報の管理について</h3>
                    <p>弊社は、あらかじめご了承いただいた場合及び法令に基づき開示が認められる場合を除き、第三者に対し、お客様の個人情報を提供することはありません。</p>
                    <p>お客様の個人情報を漏洩、紛失、改ざん等の事態から防ぐため、適切なセキュリティ対策を講じ厳重に管理します</p>
                    <p>お客様の個人情報の取扱いが適正に行われるように従業者の教育・監督を実施します。</p>
                    <h3 class="title-2">3. 利用制限について</h3>
                    <p>当サイトに掲載される情報は、正確性と最新性の確保に努めます。当サイトに掲載される全ての情報は、弊社及びその関連会社が著作権を保有し、各国の著作権法、各種条約及びその他の法律で保護されております。</p>
                    <p>個人の私的使用、その他著作権法によって認められる範囲を超えて、これらの情報を使用（複製、改変、配布）することは、事前に弊社から許可を得ない限り禁止いたします。また、第三者及び弊社に不利益や損害を与える行為、公序良俗に反する行為、その恐れがある行為、営利を目的とした行為などはこれを禁止いたします。</p>
                    <h3 class="title-2">4. コンテンツ・利用条件の変更について</h3>
                    <p>弊社は、予告なしにコンテンツの内容及び利用条件の変更、当サイトに掲載したサービスについての延期・中止・終了を行うことがございますので、予めご了承ください。</p>
                    <h3 class="title-2">5. 個人情報の開示・訂正・利用停止について</h3>
                    <p>お客様がご自身の情報の内容の開示、訂正、利用停止等を希望された場合は、これに応じます。 ただし、請求が法令による要件を満たさない場合及び弊社の最終のご利用日から相当期間を経過したお客様の情報に関しては、対応できない場合があります。</p>
                </section>
            </div> 

            <!-- お問い合わせフォーム -->
            <div id="contact" class="noto_sans_jp_700">
                <div class="title_blue">
                    <div class="d_flex mw_960 color_blue">
                        <div class="fs_30 fs_24_sp">メールフォーム</div>
                        <div class="fs_28 fs_14_sp">Mail form</div>
                    </div>
                </div>
                <div class="mw_960 fs_30">
                    <form action="mail/php/mailform.php" method="post" id="mail_form">
                        <dl>
                            <dt class="fs_21_sp">お名前</dt>
                            <dd class="required fs_16_sp"><input type="text" id="name_1" name="name_1" placeholder="佐藤"　value="" /> <input type="text" id="name_2" name="name_2" placeholder="たろう"　value="" /></dd>
                            <dt class="fs_21_sp">メールアドレス</dt>
                            <dd class="required fs_16_sp"><input type="email" id="mail_address" name="mail_address" placeholder="info@xxx.jp"　value="" /></dd>
                            <dt class="fs_21_sp">郵便番号</dt>
                            <dd class="required fs_16_sp"><input type="text" id="postal" name="postal" placeholder="ハイフン不要"　value="" onkeyup="AjaxZip3.zip2addr( this,'','address','address' );" />　<a href="http://www.post.japanpost.jp/zipcode/" target="_blank">郵便番号検索</a></dd>
                            <dt class="fs_21_sp">ご住所</dt>
                            <dd class="fs_16_sp"><input type="text" id="address" name="address" placeholder="埼玉県さいたま市"　value="" /></dd>
                            <dt class="fs_21_sp">お電話番号</dt>
                            <dd class="required fs_16_sp"><input type="tel" id="phone" name="phone" placeholder="ハイフン不要"　value="" /></dd>
                            <dt class="fs_21_sp">お問い合わせの内容</dt>
                            <dd class="required fs_16_sp"><textarea id="contents" name="contents" placeholder="お困りになっている方の状態や症状を記載ください"　cols="40" rows="5"></textarea></dd>
                        </dl>
                        <p id="form_submit" class="fs_21_sp"><input type="button" id="form_submit_button" value="送信する" /></p>
                    </form>
                </div>
            </div> 
        </main>

         <!-- 所在地 -->
         <div id="company" class="noto_sans_jp_700">
            <div class="title_blue">
                <div class="d_flex mw_960 color_blue">
                    <div class="fs_30 fs_24_sp">所在地</div>
                    <div class="fs_14_sp"></div>
                </div>
            </div>
            <div class="mw_960 fs_24 fs_18_sp">
                <dl class="c_footer__list">
                    <dt class="c_footer__title ta_center">名前</dt>
                    <dd class="c_footer__txt">さいたま訪問リハビリセンター</dd>
                </dl>
                <dl class="c_footer__list">
                    <dt class="c_footer__title ta_center">電話番号</dt>
                    <dd class="c_footer__txt">0120-187-497</dd>
                </dl>
                <dl class="c_footer__list">
                    <dt class="c_footer__title ta_center">住所</dt>
                    <dd class="c_footer__txt">
                        〒332-0001<br>
                        埼玉県川口市朝日４丁目４−４
                    </dd>
                </dl>
                <dl class="c_footer__list">
                    <dt class="c_footer__title ta_center">営業時間</dt>
                    <dd class="c_footer__txt">
                        月〜土(電話受け付け年中無休)<br>
                        9:00〜20:00
                    </dd>
                </dl>
            </div>
        </div> 


        <!-- グループ企業 -->
        <div id="group">
            <div class="group_top hidden_960 noto_sans_jp_700">
                <div class="group_line"></div>
                <div class="group_title color_blue">
                    <div class="fs_26">グループ企業</div>
                </div>
            </div>
            <div class="group_top_960 visible_960">
                <div class="group_line"></div>
                <div class="group_title color_blue">
                    <div class="fs_30">グループ企業</div>
                </div>
            </div>
            <div class="mw_960">
                <div class="group_contents fs_30 fs_18_sp">
                    <ul>
                        <li>
                            <a href="https://gunma-rehabili.com/" target="_blank">
                                <div class="d_flex">
                                    <div class="color_blue">></div>
                                    <div class="group_name">ぐんま訪問リハビリセンター</div>
                                    <div><img src="img/group_link.png" alt=""></div>
                                </div>   
                            </a>
                        </li>
                        <li>
                            <a href="https://ibaraki-rehabili.com/" target="_blank">
                                <div class="d_flex">
                                    <div class="color_blue">></div>
                                    <div class="group_name">いばらき訪問リハビリセンター</div>
                                    <div><img src="img/group_link.png" alt=""></div>
                                </div>   
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="https://kisarazu-rehabili.com/" target="_blank">
                                <div class="d_flex">
                                    <div class="color_blue">></div>
                                    <div class="group_name">ちば訪問リハビリセンター　</div>
                                    <div><img src="img/group_link.png" alt=""></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="ta_center bc_blue">
            <div class="hidden_640 mw_960 color_white">
                <p class="fs_14">Copyright © さいたま訪問リハビリセンター Inc. All Rights Reserved.</p>
            </div>
            <!-- フィックスコントロール -->
            <div id="fix_control" class="visible_640">
                <div id="fix_control_btn">
                    <button class="back_ground_color_red" onclick="location.href='#contact'">
                        <div>
                            <span><img src="img/mail.png" alt=""></span>
                            <span class="font_white noto_sans_jp_700 color_white">メールをする</span>
                        </div>
                    </button>
                    <button class="back_ground_color_green" onclick="location.href='tel:0120-725-601'">
                        <div>
                            <span><img src="img/tel_2.png" alt=""></span>
                            <span class="font_white noto_sans_jp_700 color_white">電話をかける</span>
                        </div>
                    </button>
                </div>
                <!-- <div id="fix_control_img">
                    <img src="img/back_1.png" alt="">
                </div> -->
            </div>
        </footer>
    </body>

    <!-- mail form -->
    <script src="mail/js/mailform-js.php"></script>
    <script src="mail/js/jquery.autoKana.js"></script>
    <script>
        (function( $ ) {
            $.fn.autoKana( '#name_1', '#read_1', {
                katakana: false
            });
            $.fn.autoKana( '#name_2', '#read_2', {
                katakana: false
            });
        })( jQuery );
    </script>
    <script src="mail/js/ajaxzip3.js"></script>
    <script src="mail/js/jquery.datetimepicker.js"></script>
    <script>
        (function( $ ) {
            $( 'input#schedule' ).datetimepicker({
                lang: 'ja'
            });
        })( jQuery );
    </script>

    <script>
        $(".openbtn1").click(function () {//ボタンがクリックされたら
        $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
            $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        });

        $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
            $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
            $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
        });
    </script>

    <!-- preload -->
    <!-- <script>
    $('link[as = "style"]').attr('rel','stylesheet');
    </script> -->

    
    <!-- 新着情報 -->
    <script src="//unpkg.com/vue"></script>
    <script src="contents-maker/js/contents-maker_220602.js" id="contents-maker-js" async></script>

    <!-- 続きを読む　表示・非表示 -->
    <script>
        // $(window).on('load', function() {
            // var ww = $('body').width();
            // var lineNum = 2;

            // // PC
            // if (ww >= 640) {
            //     var cnt = $(".news_contents_bottom").length;
            //     console.log(cnt);

            //     var news_contents_bottom_array = [];
            //     $(".news_contents_bottom").each(function(i, elem) {
            //         news_contents_bottom_array.push(elem);
            //     });
            //     var news_contents_detail_array = [];
            //     $(".news_contents_detail").each(function(i, elem) {
            //         news_contents_detail_array.push(elem);
            //     });
            //     for(var i=0; i<cnt; i++)
            //     {
            //         var textHeight = $(news_contents_bottom_array[i]).height();
            //         var lineHeight = parseFloat($(news_contents_bottom_array[i]).css('line-height'));

            //         if(textHeight > lineHeight*lineNum)
            //         {
            //             $(news_contents_bottom_array[i]).css({
            //                 'cssText': 'display:-webkit-box !important; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;'
            //             });
            //             if($(news_contents_bottom_array[i]).data('type') == 'news')
            //             {
            //                 $(news_contents_detail_array[i]).show();
            //             }
            //         }
            //         if($(news_contents_bottom_array[i]).data('type') == 'blog')
            //         {
            //             $(news_contents_detail_array[i]).show();
            //         }
            //     }
            // }

            // // SP
            // if (ww < 640) {
            //     var cnt_sp = $(".news_contents_bottom_sp").length;
            //     var news_contents_bottom_sp_array = [];
            //     $(".news_contents_bottom_sp").each(function(i, elem) {
            //         news_contents_bottom_sp_array.push(elem);
            //     });

            //     var news_contents_detail_sp_array = [];
            //     $(".news_contents_detail_sp").each(function(i, elem) {
            //         news_contents_detail_sp_array.push(elem);
            //     });

            //     for(var i=0; i<cnt_sp; i++)
            //     {
            //         var textHeight = $(news_contents_bottom_sp_array[i]).height();
            //         var lineHeight = parseFloat($(news_contents_bottom_sp_array[i]).css('line-height'));

            //         if(textHeight > lineHeight*lineNum)
            //         {
            //             $(news_contents_bottom_sp_array[i]).css({
            //                 'cssText': 'display:-webkit-box !important; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;'
            //             });
            //             if($(news_contents_bottom_sp_array[i]).data('type') == 'news')
            //             {
            //                 $(news_contents_detail_sp_array[i]).show();
            //             }
            //         }
            //         if($(news_contents_bottom_sp_array[i]).data('type') == 'blog')
            //         {
            //             $(news_contents_detail_sp_array[i]).show();
            //         }
            //     }
            // }
        // });
    </script>
</html>