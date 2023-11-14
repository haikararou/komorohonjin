<?php
$title_2nd = 'ご予約・営業案内';
// $title_3rd = '';
$directory_2nd = 'reserve';
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

<body class="l-body sub post" id="Reserve">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<main id="main">

  <section class="l-main -flx">
    <section class="l-main__left -flx">
      <div class="-positionEnd2">
        <h1 class="c-title -LL -eng">Reserve & Info<span>ご予約・営業案内</span></h1>
        <div class="l-main__left---lead">ご予約やお支払い方法などをご案内いたします。</div>
      </div>
    </section>
    <section class="l-main__right">
      <figure class="l-hero"><img src="<?php echo $path; ?>assets/img/reserve/01.jpg" alt=""></figure>
    </section>
  </section>

  <section class="l-main -reserve">
    <div class="p-title-L">
      <h1 class="-eng p-title-01">Reserve & Info<span>ご予約・営業案内</span></h1>
    </div>
    <div class="-flx">
      <section class="l-main__left2">
        <div class="-position">
          <h2 class="c-title -L -eng">Reserve<span>ご予約</span></h2>
          <div class="l-main__left---lead">
            <div class="reserve-box">
              <h2>ご予約はこちらから</h2>
              <h3><a href="https://yoyaku.toreta.in/komorohonjin/" target="_blank"><span>ご予約フォーム</span></a></h3>
            </div>
          </div>
        </div>
      </section>
      <section class="l-main__right2">
        <div class="p-text-box">
          <div class="conts-areaA pickup-bg">
            <h2 class="c-title -L -eng">Lunch & Dinner Reserve<span>ランチ・ディナーのご予約</span></h2>
            <p>ダイニングおよび個室でのお食事はこちらからご予約ください。</p>
            <div class="-information">メニューをご確認の上、ご予約フォームでご予約ください。</div>
            <p>
              <a href="#lunch" class="c-link -arwA">
                <div class="-eng"><span>Lunch Menu</span><div class="lunch -jpn"><span>ランチ　メニュー</span></div></div>
              </a>
            </p>
            <p>
              <a href="#dinner" class="c-link -arwA">
                <div class="-eng"><span>Dinner Menu</span><div class="dinner -jpn"><span>ディナー　メニュー</span></div></div>
              </a>
            </p>
          </div>
        </div>
        <div class="p-text-box">
          <div class="conts-areaA pickup-bg">
            <h2 class="c-title -L -eng">Party Reserve<span>ご宴会のご予約</span></h2>
            <p>9名以上または飲み放題付きのご会食は、こちらからご予約ください。</p>
            <div class="-information">ご予約フォームでご予約ください。</div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="l-main -flx -information">
    <section class="l-main__left2">
      <h2 class="c-title -L -eng">Information<span>営業案内</span></h2>
    </section>
    <section class="l-main__right2">

      <div class="p-text-box">
        <div class="conts-areaA">
          <dl class="p-list -dl">
            <div class="-flx">
              <dt>禁煙・喫煙</dt>
              <dd>全席禁煙</dd>
            </div>
            <div class="-flx">
              <dt>QRコード決済</dt>
              <dd>以下のサービスをご利用いただけます。
                <div class="qr-img">
                  <img src="<?php echo $path; ?>assets/img/tiser/qr_01_paypay.png" alt="PayPay">
                  <img src="<?php echo $path; ?>assets/img/tiser/qr_02_line.png" alt="LINE Pay">
                </div>
              </dd>
            </div>
            <div class="-flx">
              <dt>クレジットカード</dt>
              <dd>主要なクレジットカードをご利用いただけます。
                <div class="card-img">
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/card_01_visa.png" alt="VISA"><figcaption>VISA</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/card_02_master.png" alt="master"><figcaption>MasterCard</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/card_03_jdb.png" alt="JCB"><figcaption>JCB</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/card_04_ex.png" alt="AMERICAN EXPRESS"><figcaption>アメリカン<br>エキスプレス</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/card_05_DC.png" alt="Diners Club"><figcaption>ダイナース<br>クラブカード</figcaption></figure>
                </div>
              </dd>
            </div>
            <div class="-flx">
              <dt>お食事券など</dt>
              <dd>
                <p>以下のお食事券をご利用いただけます。</p>
                <div class="-near">
                  <a href="https://www.thefujiyagohonjin.com/ticket/" target="_blank" class="c-link -border -blankB"><span>藤屋お食事券</span></a>
                </div>
                <ul class="p-list -kome">
                  <li>お釣りは出ません。</li>
                  <li>各チケットは併用いただけます。</li>
                  <li>有効期限内の券のみご利用いただけます。</li>
                </ul>
              </dd>
            </div>
            <div class="-flx">
              <dt>電子マネー・電子チケット</dt>
              <dd>
                <p>【お詫び】<br>ただいま準備中です。<br>12月後半をめどに、以下の電子マネー・電子チケットがご利用いただけるようになる予定です。</p>
                <div class="card-img">
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/emoney-id.png" alt="iD"><figcaption>iD</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/emoney-quicpay.png" alt="QUICPay"><figcaption>QUICPay</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/emoney-waon.png" alt="WAON"><figcaption>WAON</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/emoney-nanaco.png" alt="nanaco"><figcaption>nanaco</figcaption></figure>
                  <figure><img src="<?php echo $path; ?>assets/img/tiser/emoney-rakutenedy.png" alt="楽天 Edy"><figcaption>楽天 Edy</figcaption></figure>
                </div>
              </dd>
            </div>
            <div class="-flx">
              <dt>その他のご案内</dt>
              <dd>
                <ul class="p-list -dot">
                  <li>お子様連れでご利用いただけます。</li>
                  <li>服装の規定やドレスコードはございません。</li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>

    </section>
  </section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>