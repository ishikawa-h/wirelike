<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
</head>

<body class="<? $uri = parse_url($_SERVER["REQUEST_URI"]); $pathArray = explode('/', $uri['path']); echo $uri['path'] == '/' ? 'home' : implode(' ', $pathArray); ?>">

<div id="header" class="header">
  <div class="container">
    <div class="logo panel">
      <a href="/"><h1 class="img">ロゴ</h1></a>
    </div><!--

 --><div class="sub panel">
      <nav>
        <a class="panel" href="">●●●</a><!--
     --><a class="panel" href="">●●●</a><!--
     --><a class="panel" href="">お問い合わせ</a>
      </nav>

      <form method="get" action="http://www.google.com/search" class="panel kerning search">
        <input type="hidden" name="hl" value="ja">
        <input type="hidden" name="ie" value="UTF-8">
        <input type="hidden" name="oe" value="UTF-8">
        <input type="hidden" value="<?= $_SERVER['SERVER_NAME'] ?>" name="sitesearch">
        <input type="text" name="q" value="" class="panel input search_input" placeholder="">
        <input type="submit" name="" value="検索" class="panel search_submit">
      </form>
    </div>
  </div>
</div>

<div id="gnavi">
  <nav class="container">
    <ul class="">
      <li class="panel"><a class="" href="">●●●●</a></li><!--
   --><li class="panel"><a class="" href="">●●●●</a></li><!--
   --><li class="panel"><a class="" href="">●●●●</a></li><!--
   --><li class="panel"><a class="" href="">●●●●</a></li>
    </ul>
  </nav>
</div>
