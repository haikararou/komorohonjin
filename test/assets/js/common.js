/*------------------------------------------------------------------
ヘッダー制御
/*------------------------------------------------------------------*/
$(function() {
    let target = $('.l-footer'); // 追従要素
    let targetPoint = target.offset().top; // 追従要素の初期位置
    $(window).on('load scroll', function() {
        let windowScrolltop = $(window).scrollTop() + 50;
        if (windowScrolltop >= targetPoint) {
            $('.l-body.pc').addClass('reversal');
        } else {
            $('.l-body.pc').removeClass('reversal');
        }
    });
});

/*------------------------------------------------------------------
メニュー開閉
/*------------------------------------------------------------------*/
/*ドロワーメニュー ----------------------------------------------------*/
var modalopen = false;
$('.l-burger').click(function (e) {
    if (modalopen == false) {
        drowerChange('view');
    } else if (modalopen == true) {
        drowerChange('hiden');
    }
    e.stopPropagation();
});

/*ドロワーメニューの出し入れ ---------------------------------------------*/
function drowerChange(bl) {
    if (bl == 'view') {
        modalopen = true;
        $('.l-body').addClass('open');
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            {'right': '-200px'},
            {
                'right': '0',
                delay: 0,
                ease: Power2.easeOut,
                onComplete: function () {},
            }
        );
    } else if (bl == 'hiden') {
        modalopen = false;
        $('.l-body').removeClass('open');
        TweenMax.fromTo(
            $('.p-header__nav-container'),
            0.4,
            {},
            {
                'right': '-200px',
                ease: Power2.easeOut,
                onComplete: function () {
                },
            }
        );
    }
}

/*------------------------------------------------------------------
リサイズ処理
/*------------------------------------------------------------------*/
const mediaQueryList = window.matchMedia('(min-width: 768px)');
const listener = (event) => {
    if (event.matches) {
        // 960px以上
        //console.log('PC用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').removeClass('sp');
        $('.l-body').addClass('pc');

        const headerScroll = () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            let windowWidth = window.innerWidth;
            let element = document.getElementsByClassName('scroll');
            if ( scrollTop <= 130) {
                $('.p-header__nav-container').css('right','-200px');
                $('.p-header__nav-list.nav-list01').css('opacity','0');
            }
            if (scrollTop <= 150) {
                $('.l-body').removeClass('scroll');
                $('.l-body').removeClass('open');
                modalopen = false;
                $('.p-header__nav-list.nav-list01').css('opacity','1');
                $('.p-header__nav-list.nav-list02 a').css('opacity','1');
            } else if (scrollTop > 150) {
                $('.l-body').addClass('scroll');
                //if( element.classList.contains('scroll') == false ){
                //     $('.p-header__nav-list.nav-list01').css('opacity','0');
                //     $('.p-header__nav-list.nav-list02 a').css('opacity','0');
                // }
            }
        };
        window.addEventListener('scroll', function () {
            headerScroll();
        });

    } else {
        // 960px未満
        //console.log('SP用ブレークポイント用処理');
        $('.l-body').removeClass('open');
        $('.l-body').addClass('sp');
        $('.l-body').removeClass('pc');
        $('.l-body').removeClass('reversal');
    }
};
mediaQueryList.addEventListener('change', listener);
// 初期化処理
listener(mediaQueryList);





//アコーディオン/////////////////////////////////////////////////////////////
$('.p-accordion dt').click(function(){
    $(this).siblings('.p-accordion dd').stop().slideToggle();
    $('.p-accordion dt').not($(this)).siblings('.p-accordion dd').slideUp();
    $(this).parent().toggleClass('active');
    $('.p-accordion dt').not($(this)).parent().removeClass('active');
});




//メニュー期間タブ/////////////////////////////////////////////////////////////
//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
    if(hashIDName){
        //タブ設定
        $('.tabPeriod li').find('a').each(function() { //タブ内のaタグ全てを取得
            var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
            if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
                var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
                $('.tabPeriod li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
                $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
                //表示させるエリア設定
                $(".areaPeriod").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
                $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
            }
        });
    }
}

//タブをクリックしたら
$('.tabPeriod a').on('click', function() {
    var idName = $(this).attr('href'); //タブ内のリンク名を取得
    GethashID (idName);//設定したタブの読み込みと
    return false;//aタグを無効にする
});

// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
    $('.tabPeriod li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.areaPeriod:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
    var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
    GethashID (hashName);//設定したタブの読み込み
});