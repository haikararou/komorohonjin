<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
$path = 'https://www.komorohonjin.com/test/';
} else {
$path = 'https://www.komorohonjin.com/';
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?> | 小諸本陣主屋 | 藤屋 | THE FUJIYA GOHONJIN</title>
<meta name="robots" content="max-image-preview:large" />
<link rel="canonical" href="https://www.komorohonjin.com/" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:site_name" content="THE KOMORO HONJIN by THE FUJIYA GOHONJIN">
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?> | 小諸本陣主屋 THE KOMORO HONJIN | 旧北国街道 小諸本陣 主屋" />
<meta property="og:url" content="https://www.komorohonjin.com/" />
<meta property="og:image" content="https://www.komorohonjin.com/img/assets/ogp.jpg" />
<meta property="og:description" content="<?php if(!empty($description) ){ echo $description; } ?>">
<meta property="fb:app_id" content="203956656953848">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php if(!empty($title_3rd) ){ echo $title_3rd.' | '; } ?><?php if(!empty($title_2nd) ){ echo $title_2nd.' | '; } ?> | 小諸本陣主屋 THE KOMORO HONJIN | 旧北国街道 小諸本陣 主屋" />
<meta name="twitter:image" content="https://www.komorohonjin.com/img/assets/ogp.jpg" />
<meta name="twitter:description" content="<?php if(!empty($description) ){ echo $description; } ?>">
<link rel='stylesheet' href='<?php echo $path; ?>assets/css/reset.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo $path; ?>assets/css/style.css?ver=6.1.1' type='text/css' media='all' />
<link rel="icon" href="<?php echo $path; ?>assets/img/favicon.ico" type="image/png"/>
<!-- adobe fonts -->
<script>
(function(d) {
var config = {
    kitId: 'zxn8iws',
    scriptTimeout: 3000,
    async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
</script>
<!-- adobe fonts end -->