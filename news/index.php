<?php
$title_2nd = 'お知らせ';
// $title_3rd = '';
$directory_2nd = 'news';
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

<body class="l-body sub" id="News">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/header.php"); ?>

<main id="main">

  <section class="l-main -flx">
    <section class="l-main__left -flx">
      <div class="-positionEnd2">
        <h1 class="c-title -LL -eng">News<span>お知らせ</span></h1>
      </div>
    </section>
    <section class="l-main__right">
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
    </section>
  </section>

  <section class="l-main -newsList -flx">
    <div class="newsList">
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
      <a href="post.php" class="-indiv">
        <figure class="-fig"><img src="<?php echo $path; ?>assets/img/news/01.jpg" alt=""></figure>
        <h2 class="-date -eng">22 August 2023</h2>
        <h3 class="-title"><span>スペシャル セプテンバー</span></h3>
        <h4 class="-remarks">月曜～木曜 限定</h4>
      </a>
    </div>
    <div class='wp-pagenavi' role='navigation'>
      <a class="previouspostslink" rel="prev" aria-label="Prev" href=""><span>Prev</span></a>
      <a class="page smaller" title="ページ 1" href="">1</a>
      <span aria-current='page' class='current'>2</span>
      <a class="page larger" title="ページ 3" href="">3</a>
      <a class="page larger" title="ページ 4" href="">4</a>
      <a class="nextpostslink" rel="next" aria-label="Next" href=""><span>Next</span></a>
    </div>
  </section>

</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/test/assets/inc/footer.php");?>

</body>
</html>