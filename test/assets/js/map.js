/* Googlemap カスタマイズ */
$(function () {
  /* 共通 */
  //　オリジナルマーカー設定
  var location = window.location;
  var iconurl = // マーカー サーバー上でパスを合わせる
    location.origin +
    // '/yoshida/wp-content/themes/yoshida-theme/assets/img/common/map-pin-pc.png';
    'https://test.ultra-l.net/a/komoro/assets/img/tiser/pin01.png';
  var iconsize = new google.maps.Size(74, 98); //マーカーサイズ

  //　店舗　座標設定
  var stores = {
	  honjin: {
      name: '小諸御本陣主屋',
      position: new google.maps.LatLng(6.32861065404642,138.42049034123633),
    },
	  p1: {
      name: '提携駐車場1',
      position: new google.maps.LatLng(36.32832513349088,138.42148761976236,),
    },
    p2: {
      name: '提携駐車場2',
      position: new google.maps.LatLng(36.32621025680076,138.4227527623553),
    },


  };

  /* Top・店舗一覧ページ */
  if ($('#google_map').length) {
    /* 座標を指定 */
    // var MyLatLng = stores.miwa'];
    var MyLatLng = stores.miwa.position;

    /* オプション設定 */
    var Options = {
      zoom: 14, //地図の縮尺値を指定
      center: MyLatLng, //地図の中心座標
      mapTypeId: 'roadmap', //地図の種類を指定
      scrollwheel: true, //スクロールで拡大縮小
      mapTypeControl: false, //マップタイプ コントロール
      fullscreenControl: false, //全画面表示コントロール
      streetViewControl: false, //ストリートビュー コントロール
      zoomControl: true, //ズーム コントロール

      styles: [
        {
          stylers: [
            {
              color: '#86c770',
            },
          ],
        },
        {
          elementType: 'geometry',
          stylers: [
            {
              color: '#f5f5f5',
            },
          ],
        },
        {
          elementType: 'geometry.fill',
          stylers: [
            {
              color: '#f1f5ef',
            },
          ],
        },
        {
          elementType: 'labels.icon',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#6e8c63',
            },
          ],
        },
        {
          elementType: 'labels.text.stroke',
          stylers: [
            {
              color: '#f5f5f5',
            },
          ],
        },
        {
          featureType: 'administrative.land_parcel',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#bdbdbd',
            },
          ],
        },
        {
          featureType: 'poi',
          elementType: 'geometry',
          stylers: [
            {
              color: '#eeeeee',
            },
          ],
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#757575',
            },
          ],
        },
        {
          featureType: 'poi.business',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [
            {
              color: '#e5e5e5',
            },
          ],
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#9e9e9e',
            },
          ],
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [
            {
              color: '#ffffff',
            },
          ],
        },
        {
          featureType: 'road.arterial',
          elementType: 'labels',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'road.arterial',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#757575',
            },
          ],
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [
            {
              color: '#dadada',
            },
          ],
        },
        {
          featureType: 'road.highway',
          elementType: 'labels',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#616161',
            },
          ],
        },
        {
          featureType: 'road.local',
          stylers: [
            {
              visibility: 'off',
            },
          ],
        },
        {
          featureType: 'road.local',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#9e9e9e',
            },
          ],
        },
        {
          featureType: 'transit.line',
          elementType: 'geometry',
          stylers: [
            {
              color: '#e5e5e5',
            },
          ],
        },
        {
          featureType: 'transit.station',
          elementType: 'geometry',
          stylers: [
            {
              color: '#eeeeee',
            },
          ],
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [
            {
              color: '#c9c9c9',
            },
          ],
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [
            {
              color: '#9e9e9e',
            },
          ],
        },
      ],
    };

    /* 埋め込むMAPのidを指定 */
    var map = new google.maps.Map(
      document.querySelector('#google_map'),
      Options
    );

    var index = 0;
    var marker = [];
    var infoWindow = [];

    for (let i in stores) {
      marker[index] = new google.maps.Marker({
        position: stores[i].position,
        map: map,
        icon: {
          url: iconurl,
          scaledSize: iconsize,
        },
      });

      // 情報ウィンドウ
      infoWindow[index] = new google.maps.InfoWindow({
        //情報ウィンドウのテキスト
        content:
          '<div class="p-custommap__window">' +
          stores[i].name +
          '<br><a href="' +
          location.href +
          i +
          '/"' +
          'class="p-custommap__link">詳しく見る</a></div>',
      });

      markerEvent(index);
      index++;
    }

    var currentInfoWindow = null; //最後に開いた情報ウィンドウを記憶
    // マーカーにクリックイベントを追加
    function markerEvent(i) {
      marker[i].addListener('click', function () {
        //先に開いた情報ウィンドウがあれば、closeする
        if (currentInfoWindow) {
          currentInfoWindow.close();
        }

        // マーカーをクリックしたとき
        infoWindow[i].open(map, marker[i]); // 吹き出しの表示

        //開いた情報ウィンドウを記録しておく
        currentInfoWindow = infoWindow[i];
      });
    }
  }
});
