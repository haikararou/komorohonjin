<?php
$title_2nd = 'アクセス・駐車場';
// $title_3rd = '';
$directory_2nd = 'access';
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
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBCcZk_tBR6-Hvg6_5i37TJN2va4KS9sBE&language=ja"></script>
</head>

<body class="l-body sub post" id="Access">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<main id="main">

  <section class="l-main">
    <div class="-map">
      <div class="div1">
        <h2 class="c-title -LL -eng -w32">Access & Parking<span>アクセス・駐車場</span></h2>
        <div class="l-main__left---lead">
          <p>小諸市街地や懐古園から徒歩ですぐ「大手門公園」内にあるイタリアンレストランです。小諸ICから車で約10分です。</p>
        </div>
      </div>
      <div class="div2"><div id="google_map"></div></div>
      <div class="div3">
        <div class="map_add">
          <dl>
            <div>
              <dt class="-first">小諸御本陣主屋</dt>
              <dd>〒384-0031 長野県小諸市大手1丁目6-14<br><a href="https://maps.app.goo.gl/HhoRNyUTBAbeCjm79" target="_blank" class="c-link -link"><span>Googlemap</span></a></dd>
            </div>
            <div>
              <dt>小諸市営「大手門公園有料駐車場」</dt>
              <dd>〒384-0031 長野県小諸市大手1-5-22<br><a href="https://maps.app.goo.gl/cZ9a9oA8KwzM6mBP7" target="_blank" class="c-link -link"><span>Googlemap</span></a></dd>
            </div>
            <div>
              <dt>小諸市営「市営小諸駅駐車場」</dt>
              <dd>〒384-0025 長野県小諸市相生町1-1-1<br><a href="https://maps.app.goo.gl/PVqCUmRhC2zW1Sfa8" target="_blank" class="c-link -link"><span>Googlemap</span></a></dd>
            </div>
          </dl>
          <p>上記の駐車場が満車の場合は、恐れ入りますが、<br>お電話にてお問い合わせください（026-232-1241）。</p>
        </div>
      </div>
    </div>
    <div class="-flx">
      <section class="l-main__left2"></section>
      <section class="l-main__right2">
        <div class="p-text-box">
          <p>駐車場は2時間まで無料でご利用いただけます。<br>2時間を越えてご利用の際は、お帰りの際に駐車券をレセプションへご提示ください。<br>3,000円以上のご利用で1時間分（上限3時間分）の駐車券をご用意しております。</p>

<script>
function init() {
var mapOptions = { "center": {  "lat": 36.3268112,  "lng": 138.4211641 }, "clickableIcons": true, "disableDoubleClickZoom": false, "draggable": true, "fullscreenControl": false, "keyboardShortcuts": true, "mapMaker": false, "mapTypeControl": false, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": false, "scaleControl": true, "scrollwheel": true, "streetViewControl": false
, "zoom": 18, "zoomControl": true};
var mapElement = document.getElementById('google_map');
var map = new google.maps.Map(mapElement, mapOptions);
var myMarker = new google.maps.Marker({
  // マーカーを置く緯度経度
  position: new google.maps.LatLng(36.32861065404642, 138.42049034123633),
  map: map,
  icon: '../assets/img/tiser/marker01.svg',
});
var myMarker2 = new google.maps.Marker({
  // マーカーを置く緯度経度
  position: new google.maps.LatLng(36.32832513349088, 138.42148761976236),
  map: map,
  icon: '../assets/img/tiser/marker02.svg',
});
var myMarker3 = new google.maps.Marker({
  // マーカーを置く緯度経度
  position: new google.maps.LatLng(36.32621025680076,138.4227527623553),
  map: map,
  icon: '../assets/img/tiser/marker02.svg',
});
var mapStyle = [ {
  "stylers": [ {
  "saturation": -100
  } ]
} ];
var mapType = new google.maps.StyledMapType(mapStyle);
map.mapTypes.set( 'GrayScaleMap', mapType);
map.setMapTypeId( 'GrayScaleMap' );

google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
}
google.maps.event.addDomListener(window, 'load', init);
</script>


        </div>
      </section>
    </div>
  </section>

  <section class="l-main -flx -access">
    <section class="l-main__left2">
      <h2 class="c-title -L -eng">Access<span>アクセス</span></h2>
      <div class="l-main__left---lead">
        <p><a href="#access01" class="c-link -arwA"><span>軽井沢・佐久平から電車でお越しの方</span></a></p>
        <p><a href="#access02" class="c-link -arwA"><span>長野方面から電車でお越しの方</span></a></p>
        <p><a href="#access03" class="c-link -arwA"><span>お車でお越しの方</span></a></p>
      </div>
      <figure class="l-main__left---thumb">
        <img src="<?php echo $path; ?>assets/img/tiser/access_map.jpg" alt="">
      </figure>
    </section>
    <section class="l-main__right2">

      <div class="p-text-box p-conts" id="access01">
        <h2 class="title_train"><em>軽井沢・佐久平から電車でお越しの方</em><span>軽井沢からしなの鉄道で23分、佐久平から小海線で15分、小諸駅から徒歩3分です。</span></h2>
        <div class="access-grid01">
          <div class="div1 tate">軽井沢駅</div>
          <div class="div2"> </div>
          <div class="div3 tate">佐久平駅</div>
          <div class="div4 underLine railway"><span>しなの鉄道<br>23分</span></div>
          <div class="div5"> </div>
          <div class="div6 underLine"><span>小海線<br>15分</span></div>
          <div class="div7 tate">小諸駅</div>
          <div class="div8 underLine walk"><span>徒歩<br>3分</span></div>
          <div class="div9 tate">小諸本陣主屋</div>
        </div>
      </div>

      <div class="p-text-box p-conts" id="access02">
        <h2 class="title_train"><em>長野方面から電車でお越しの方</em><span>長野駅からしなの鉄道など各線で約1時間、小諸駅から徒歩3分です。</span></h2>
        <div class="access-grid02">
          <div class="div1 tate">長野駅</div>
          <div class="div2 underLine railway"><span>しなの鉄道など各線<br>約1時間</span></div>
          <div class="div3 tate">小諸駅</div>
          <div class="div4 underLine walk"><span>徒歩<br>3分</span></div>
          <div class="div5 tate">小諸本陣主屋</div>
        </div>
      </div>

      <div class="p-text-box p-conts" id="access03">
        <h2 class="title_car"><em>お車でお越しの方</em><span>小諸駅付近に駐車後、徒歩3分です。</span></h2>
        <div class="access-grid03">
          <div class="div1 tate">小諸ＩＣ</div>
          <div class="div2"></div>
          <div class="div3 tate">佐久平駅</div>
          <div class="div4"></div>
          <div class="div5 tate">軽井沢駅</div>
          <div class="div6 underLine railway"><span>お車で<br>約10分</span></div>
          <div class="div7"></div>
          <div class="div8 underLine railway"><span>タクシーで<br>約20分</span></div>
          <div class="div9"></div>
          <div class="div10 underLine railway"><span>タクシーで<br>約40分</span></div>
          <div class="div11 tate">小諸駅<div><a href="https://maps.app.goo.gl/PVqCUmRhC2zW1Sfa8" target="_blank" class="c-link -link -arwA"><span>駐車場</span></a></div></div>
          <div class="div12 underLine walk"><span>徒歩<br>3分</span></div>
          <div class="div13 tate">小諸本陣主屋</div>
        </div>
      </div>

    </section>
  </section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>