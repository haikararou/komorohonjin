<?php
$title_2nd = 'ご宴会';
// $title_3rd = '';
$directory_2nd = 'party';
// $directory_3rd = '';
$description = '2023年11月オープンの小諸市のイタリアンレストラン「THE KOMORO HONJIN」は、旧北国街道 小諸宿 本陣主屋を活用した施設です。';
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja" prefix="og: https://ogp.me/ns#"  class="no-js">
<head>
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
    include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/meta.php");
} else {
    include($_SERVER['DOCUMENT_ROOT'] . "/assets/inc/meta.php");
}
?>
</head>

<body class="l-body sub" id="Party">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<main id="main">

  <section class="l-main -flx">
    <section class="l-main__left -positionEnd2">
      <div class="-position">
        <h1 class="c-title -LL -eng">Party<span>ご宴会</span></h1>
        <div class="l-main__left---lead">宴会・会議・セミナー・企画など利用シーンを想定することができるテキストが入ります40-50</div>
        <div class="-smallMenu">
          <h2 class="-eng -colorBwn">Party Plan Menu</h2>
          <dl>
            <div>
              <dt class="-eng">Premium Party<span class="-jpn">プレミアムプラン</span></dt>
              <dd class="-eng">¥10,000</dd>
            </div>
            <div>
              <dt class="-eng">Omoya Party<span class="-jpn">主屋プラン</span></dt>
              <dd class="-eng">¥8,000</dd>
            </div>
            <div>
              <dt class="-eng">Season Party<span class="-jpn">季節のプラン</span></dt>
              <dd class="-eng">¥8,000</dd>
            </div>
            <div>
              <dt class="-eng">Lunch Party<span class="-jpn">ランチパーティープラン</span></dt>
              <dd class="-eng">¥5,000</dd>
            </div>
            <div class="no_dot">
              <dt class="-eng">Free Drink<span class="-jpn">フリードリンクプラン</span></dt>
            </div>
            <div class="no_dot">
              <dt class="-eng">Option<span class="-jpn">オプション</span></dt>
            </div>
          </dl>
        </div>
        <ul class="-brackets-list">
          <li class="-org"><a href="./">ご予約フォーム</a></li>
        </ul>
      </div>
    </section>
    <section class="l-main__right -main-bottom">
      <figure class="l-hero2">
        <img src="<?php echo $path; ?>assets/img/party/01.jpg" alt="">
      </figure>
    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">Premium Party<span>プレミアムプラン</span></h2>
          <h3 class="p-title-02 -eng">¥2,800</h3>
        </div>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/party/02.jpg" alt="">
        <figcaption>写真はイメージです。</figcaption>
      </figure>
    </section>
    <section class="l-main__right2">
      <div class="-menu -lunch">

        <ul class="tabPeriod">
          <li class="active"><a href="#tabPeriod01" class="-eng">8/28 - 9/11</a></li>
          <li><a href="#tabPeriod02" class="-eng">9/12 〜 9/30</a></li>
        </ul>

        <div id="tabPeriod01" class="areaPeriod is-active">
          <dl class="p-list -dl">
            <div class="-flx">
              <dt>Starter</dt>
              <dd>
                <ul>
                  <li>ストゥッツキーニ</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Appetizers</dt>
              <dd>
                <ul>
                  <li>前菜</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Pasta</dt>
              <dd>
                <ul>
                  <li>コース特製パスタ</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Fish</dt>
              <dd>
                <ul>
                  <li>お魚料理</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Meat</dt>
              <dd>
                <p>下記より<a href="" class="c-link -link"><span>お選び</span></a>ください</p>
                <ul>
                  <li>お肉料理</li>
                  <li>特別お肉料理（+ ￥ 2,000）</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Dessert</dt>
              <dd>
                <ul>
                  <li>デザート</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Bread</dt>
              <dd>
                <ul>
                  <li>自家製フォカッチャなど</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>Coffee or Tea<span>¥2,000</span></dt>
              <dd>
                <ul>
                  <li>コーヒーまたは紅茶</li>
                  <li><a href="" class="c-link -link -arwC"><span>ソフトドリンク3種</span></a></li>
                </ul>
              </dd>
            </div>
          </dl>
          <div class="menu-info">
            <div class="menu-memo">
              <ul class="p-list -kome">
                <li>お一人様500円のコペルトを頂戴します</li>
                <li>メニュー詳細は決定次第こちらに掲載します</li>
                <li>食材アレルギーをお持ちの方はスタッフにお申しつけください</li>
                <li>メニュー内容は変更になる場合がございます</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="tabPeriod02" class="areaPeriod">
          <p>タブ２</p>
        </div>
      </div>
    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">Free Drink<span>フリードリンクプラン</span></h2>
        </div>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/party/02.jpg" alt="">
        <figcaption>写真はイメージです。</figcaption>
      </figure>
    </section>
    <section class="l-main__right2">
      <div class="-menu -lunch">

        <ul class="tabPeriod">
          <li class="active"><a href="#tabPeriod01" class="-eng">8/28 - 9/11</a></li>
          <li><a href="#tabPeriod02" class="-eng">9/12 〜 9/30</a></li>
        </ul>

        <div id="tabPeriod01" class="areaPeriod is-active">
          <div class="p-conts -mini">
            <div class="p-conts">
              <p>2時間飲み放題のプランになります。</p>
            </div>
            <div class="p-conts">
              <dl class="p-list -dl">
                <div class="-flx">
                  <dt>ノンアルコール A<span>¥1,000</span></dt>
                  <dd>
                    <ul>
                      <li>乾杯用ノンアルコールスパークリングワイン</li>
                      <li>オレンジジュース、ウーロン茶、ジンジャーエール</li>
                    </ul>
                  </dd>
                </div>
                <div class="-flx">
                  <dt>スタンダードA<span>¥2,000</span></dt>
                  <dd>
                    <ul>
                      <li>ビール、ワイン（赤・白）</li>
                      <li><a href="" class="c-link -link -arwB"><span>ソフトドリンク3種</span></a></li>
                    </ul>
                  </dd>
                </div>
                <div class="-flx">
                  <dt>スタンダードB<span>¥2,000</span></dt>
                  <dd>
                    <ul>
                      <li>ビール、ハイボール、カクテル（ジン・カシス・ウォッカ）</li>
                      <li><a href="" class="c-link -link -arwB"><span>ソフトドリンク3種</span></a></li>
                    </ul>
                  </dd>
                </div>
                <div class="-flx">
                  <dt>フジヤセレクション<span>¥2,500</span></dt>
                  <dd>
                    <ul>
                      <li>ビール、ワイン（赤・白）、芋焼酎、ハイボール</li>
                      <li><a href="" class="c-link -link -arwB"><span>カクテル4種</span></a></li>
                      <li><a href="" class="c-link -link -arwB"><span>ソフトドリンク3種</span></a></li>
                    </ul>
                  </dd>
                </div>
                <div class="-flx">
                  <dt>プライム<br>セレクション<span>¥2,500</span></dt>
                  <dd>
                    <ul>
                      <li>ビール、ワイン（赤・白）、日本酒、芋焼酎、ハイボール</li>
                      <li><a href="" class="c-link -link -arwB"><span>カクテル4種</span></a></li>
                      <li><a href="" class="c-link -link -arwB"><span>ソフトドリンク3種</span></a></li>
                    </ul>
                  </dd>
                </div>
                <div class="-flx">
                  <dt>セレクトカクテル<span>¥2,500</span></dt>
                  <dd>
                    <ul>
                      <li>ビール、信州産ワイン（赤・白）、信州産日本酒、信州産芋焼酎、信州産ウイスキー</li>
                      <li>信州産りんごジュース、ウーロン茶、ジンジャーエール</li>
                      <li><a href="" class="c-link -link -arwB"><span>カクテル3種</span></a></li>
                      <li><a href="" class="c-link -link -arwB"><span>ソフトドリンク3種</span></a></li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
          
          
          <div class="menu-info">
            <div class="p-conts -mini">
              <div class="p-text-box">
                <div class="conts-areaA pickup-bg -mini">
                  <h2 class="c-title -M">セレクトカクテル</h2>
                  <ul class="p-list -kome">
                    <li>5種類よりお選びください<br>・ジン・カシス・カンパリ・ピーチ・ウォッカ</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="p-conts -mini">
              <div class="p-text-box">
                <div class="conts-areaA pickup-bg -mini">
                  <h2 class="c-title -M">セレクトソフトドリンク</h2>
                  <ul class="p-list -kome">
                    <li>7種類よりお選びください<br>・おすすめノンアルコールカクテル・ウーロン茶・りんごジュース・オレンジジュース・グレープフルーツジュース・ジンジャーエール</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="p-conts -mini">
              <div class="p-text-box">
                <div class="conts-areaA pickup-bg -mini">
                  <h2 class="c-title -M">グレードアップ　オプション</h2>
                  <ul class="p-list -kome">
                    <li>上記各プランに下記追加料金で付け加える事が可能です。<br>
                      ＋500円　乾杯用スパークリングワイン　又は　ノンアルコールスパークリングワイン<br>
                      ＋500円　日本酒<br>
                      ＋300円　ノンアルコールビール</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="p-conts -mini">
              <div class="menu-memo">
                <ul class="p-list -kome">
                  <li>お一人様500円のコペルトを頂戴します</li>
                  <li>メニュー詳細は決定次第こちらに掲載します</li>
                  <li>食材アレルギーをお持ちの方はスタッフにお申しつけください</li>
                  <li>メニュー内容は変更になる場合がございます</li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div id="tabPeriod02" class="areaPeriod">
          <p>タブ２</p>
        </div>
      </div>
    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">Option<span>オプション</span></h2>
        </div>
      </div>
    </section>
    <section class="l-main__right2">
      <div class="-menu -lunch">

        <ul class="tabPeriod">
          <li class="active"><a href="#tabPeriod01" class="-eng">8/28 - 9/11</a></li>
          <li><a href="#tabPeriod02" class="-eng">9/12 〜 9/30</a></li>
        </ul>

        <div id="tabPeriod01" class="areaPeriod is-active">
          <div class="p-conts">
            <p>オプションプランになります。別途料金が必要になります。　※ 表示価格は税込です。</p>
          </div>
          <div class="p-conts">
            <dl class="p-list -dl">
              <div class="-flx">
                <dt class="-jpn">HEIGORO 焼菓子<span>¥1,500 -</span></dt>
                <dd>お帰りの際の手土産にも喜ばれる、焼き菓子をご用意しております。</dd>
              </div>
              <div class="-flx">
                <dt class="-jpn">記念撮影<span>￥33,000 -</span></dt>
                <dd>専属のプロカメラマンが皆様の思い出に残る一枚を撮影させていただきます。<br>データでの納品となります。</dd>
              </div>
              <div class="-flx">
                <dt class="-jpn">花束<span>￥3,300 -</span></dt>
                <dd>フローリストがご希望のイメージでお作りいたします。<br>お世話になった方や、お祝いに。</dd>
              </div>
              <div class="-flx">
                <dt class="-jpn">お食事券<span>￥1,000 -</span></dt>
                <dd>
                  <p>藤屋４店舗でご利用いただけるお食事券です。<br>有効期限は発行から半年間です。</p>
                  <p><a href="" class="c-link -link -arwB"><span>詳しく見る</span></a></p>
                </dd>
              </div>
              <div class="-flx">
                <dt class="-jpn">会議＋お食事会</dt>
                <dd>企業向け、会議＋お食事会としてのご利用も可能です。
                </dd>
              </div>
            </dl>
          </div>
        </div>

        <div id="tabPeriod02" class="areaPeriod">
          <p>タブ２</p>
        </div>
      </div>
    </section>
  </section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>