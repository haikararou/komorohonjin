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