<?php
$title_2nd = 'お飲み物';
// $title_3rd = '';
$directory_2nd = 'beverage';
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

<body class="l-body sub" id="Beverage">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<section class="l-nav">
  <div class="l-header">
    <nav class="p-header">
      <ul class="-brackets-list">
        <li class="-org"><a href="./">ご予約・営業案内</a></li>
        <li class="-wht"><a href="./product">アクセス・駐車場</a></li>
      </ul>
      <ul class="-language-list">
        <li><a href="./contact"><span>JP</span></a></li>
        <li class="-wht"><a href="./contact"><span>EN</span></a></li>
      </ul>
    </nav>
  </div>
  <ul class="l-nav--list">
    <li><a href="">Story</a></li>
    <li><a href="">Lunch</a></li>
    <li><a href="">Dinner</a></li>
    <li><a href="">Beverage</a></li>
    <li><a href="">Party</a></li>
  </ul>
  <div class="p-nav__inner---logo">
    <figure>
      <img src="<?php echo $path; ?>assets/img/common/logo_wht.svg" alt="小諸本陣主屋 | 藤屋 | THE FUJIYA GOHONJIN">
    </figure>
  </div>
  <div class="p-nav__inner---navi">
    <div class="p-nav__inner---grid">
      <dl class="grid1">
        <dt>Access & Parking</dt>
        <dd>
          <p><address>〒384-0031<br>長野県小諸市大手1丁目6-14</address></p>
          <p>
            <a href="" class="c-link -link" target="_blank"><span>Googlemap</span></a><br>
            <a href="" class="c-link -link"><span>アクセス・駐車場</span></a>
          </p>
        </dd>
      </dl>
      <dl class="grid2">
        <dt>Reserve & Info</dt>
        <dd>
          <p>
            <span class="-tel">tel:<span>000-0000-0000</span></span><br>
            <span class="-time">10:00〜15:30/16:30〜Close</span>
          </p>
          <p><a href="" class="c-link -link"><span>ご予約・営業案内</span></a></p>
        </dd>
      </dl>
      <dl class="grid3">
        <dt>Help</dt>
        <dd>
          <p>
            <a href="./news" class="c-link -link"><span>お知らせ</span></a><br>
            <a href="./faq" class="c-link -link"><span>よくあるご質問</span></a><br>
            <a href="./contact" class="c-link -link"><span>お問い合わせフォーム</span></a>
          </p>
        </dd>
      </dl>
      <dl class="grid4">
        <dt>Social Media</dt>
        <dd>
          <p>
            <a href="Facebook" target="_blank" class="c-link -link"><span>Facebook</span></a><br>
            <a href="Instagram" target="_blank" class="c-link -link"><span>Instagram</span></a>
          </p>
        </dd>
      </dl>
    </div>
  </div>
</section>

<main id="main">

  <section class="l-main -flx">
    <section class="l-main__left -positionEnd2">
      <div class="-position">
        <h1 class="c-title -LL -eng">Beverage<span>お飲み物</span></h1>
        <div class="l-main__left---lead">お飲み物についての案内文が入ります。お飲み物についての案内文が入ります。お飲み物についての案内文が入ります。</div>
        <div class="-smallMenu">
          <h2 class="-eng -colorBwn">Beverage Menu</h2>
          <dl>
            <div class="no_dot">
              <dt class="-eng">Sparkling & Champagne<span class="-jpn">スパークリング＆シャンパーニュ</span></dt>
            </div>
            <div class="no_dot">
              <dt class="-eng">White Wine<span class="-jpn">白ワイン</span></dt>
            </div>
            <div class="no_dot">
              <dt class="-eng">Red Wine<span class="-jpn">赤ワイン</span></dt>
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
        <img src="<?php echo $path; ?>assets/img/beverage/01.jpg" alt="">
      </figure>
    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">Sparkling & Champagne<span>スパークリング＆シャンパーニュ</span></h2>
        </div>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/beverage/02.jpg" alt="">
        <figcaption>写真はイメージです。</figcaption>
      </figure>
    </section>
    <section class="l-main__right2">
      <div class="beverage-list">
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price -red">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price -red">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
      </div>
    </section>
  </section>

  <section class="l-main -flx">
    <section class="l-main__left2">
      <div class="p-title-M">
        <div class="-flx -baseline -start">
          <h2 class="p-title-01 -eng">White Wine<span>白ワイン</span></h2>
        </div>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/beverage/02.jpg" alt="">
        <figcaption>写真はイメージです。</figcaption>
      </figure>
    </section>
    <section class="l-main__right2">
      <div class="beverage-list">
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
        <div class="-item">
          <div class="-title">Asti Spumante (Santero)<span>アスティ スプマンテ（サンテロ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Franciacorta Cuvée Prestige Brut (Ca’del Bosco)<span>フランチャコルタ キュヴェ プレステージ ブリュット（カ デル ボスコ）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">NV</div>
        </div>
        <div class="-item">
          <div class="-title">Touraine Brut (Monmousseau)<span>トゥーレーヌ ブリュット（モンムソー）</span></div>
          <div class="-price">¥4,600</div>
          <div class="-era">2017</div>
        </div>
      </div>
    </section>
  </section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>