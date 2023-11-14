<?php
$title_2nd = 'ディナー';
// $title_3rd = '';
$directory_2nd = 'dinner';
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

<body class="l-body" id="Dinner">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<main id="main">

  <section class="l-main -flx">
    <section class="l-main__left -positionEnd">
      <div class="-position">
        <h1 class="c-title -LL -eng">Dinner<span>ディナー</span></h1>
        <div class="l-main__left---lead">心地よい賑わいと 四季を映しだす庭園が 魅力のディナータイムシェフ特製のディナーコースで 優雅なひとときを</div>
        <div class="-smallMenu">
          <h2 class="-eng -colorBwn">Dinner Menu</h2>
          <dl>
            <div>
              <dt class="-eng">Dinner Course<span class="-jpn">ディナーコース</span></dt>
              <dd class="-eng">¥6,500</dd>
            </div>
            <div>
              <dt class="-eng">Dinner Course<span class="-jpn">ディナーコース</span></dt>
              <dd class="-eng">¥8,000</dd>
            </div>
            <div>
              <dt class="-eng">Kid’s Menu<span class="-jpn">お子様メニュー</span></dt>
              <dd class="-eng">¥1,000 / ¥1,500</dd>
            </div>
          </dl>
        </div>
        <ul class="-brackets-list">
          <li class="-blk"><a href="">空席状況・カレンダー場</a></li>
          <li class="-org"><a href="./">ご予約フォーム</a></li>
        </ul>
      </div>
    </section>
    <section class="l-main__right">
      <figure>
        <img src="<?php echo $path; ?>assets/img/lunch/main.jpg" alt="">
      </figure>

    </section>
  </section>

  <section class="l-main -flx -timeschedule -dinner">
    <section class="-layout">

      <div class="-schedule">
        <h2 class="-eng -colorBwn">Dinnet Time Schedule</h2>
        <h3 class="-eng">22 August 2023</h3>
        <h4 class="-eng">Open 11:00 - Close 15:00<span> [ Last Order 14:00 ]</span></h4>
      </div>

      <div class="-calendar">
        <div class="-inner">
          カレンダー
        </div>
      </div>

      <div class="-reserve">
        <h2 class="-eng -colorBwn">Reserve</h2>
        <p class="-dot">本日お時間帯によりお席に空きがございます</p>
        <h3 class="-eng">tel:000-0000-0000</h3>
        <p>受付時間　<span class="-eng">10:00〜15:30/16:30 〜 Close</span></p>
        <ul class="-brackets-list">
          <li class="-org"><a href="./">ご予約フォーム</a></li>
        </ul>
      </div>

      <ul class="-comment p-list -kome">
        <li>定休日はございません。</li>
        <li>お子様連れでご利用いただけます。</li>
        <li>服装の規定やドレスコードはございません。</li>
        <li>ご予約はご利用日の「前月の1日」から承っております。<br>例｜ご利用日：10月20日 → 9月1日よりご予約可能です。</li>
      </ul>

    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">Chef's Lunch<span>シェフズランチ</span></h2>
          <h3 class="p-title-02 -eng">¥4,500</h3>
        </div>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/lunch/ph01.jpg" alt="">
        <figcaption>写真はイメージです。</figcaption>
      </figure>
    </section>
    <section class="l-main__right2">
      <div class="-menu -dinner">

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

</main>

<a href="<?php echo $path; ?>lunch/" class="-float -dinner">
  <div>Lunch<span>ランチ</span></div>
</a>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>