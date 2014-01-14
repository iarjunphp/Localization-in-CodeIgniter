<?php echo doctype('html5'); ?>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<?php 

/*meta data*/
echo meta($name = 'viewport', $content = 'width=device-width, initial-scale=1.0');
echo meta('description',$description);
echo meta('keywords',$keywords);
echo meta('author',$author);

/*basic css files */
echo link_tag(CSS.'bootstrap.min.css'); 
echo link_tag(CSS.'style.css'); 


/*extra CSS*/
foreach($css as $c):
     echo link_tag(CSS.$c);
 endforeach;

/*extra fonts*/
foreach($fonts as $f):
 echo link_tag("http://fonts.googleapis.com/css?family=".$f);
endforeach;

/*Let fav and touch icons*/
//echo link_tag(IMAGES.'ico/favicon.ico', 'shortcut icon','image/png');
//echo link_tag(IMAGES.'ico/apple-touch-icon-precompresse.png', 'apple-touch-icon','image/png');
//echo link_tag(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png', 'apple-touch-icon" sizes="57x57','image/png');
//echo link_tag(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png', 'apple-touch-icon" sizes="72x72','image/png');
//echo link_tag(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png', 'apple-touch-icon" sizes="114x114','image/png');
?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
 <?php echo script_tag(JS."html5shiv.js"); ?>
 <?php echo script_tag(JS."respond.min.js"); ?>
<![endif]-->
</head>
<body>
<?php 
// load view data
echo $body; 
//  load jquery


?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php
// load bootstrap 
echo script_tag(JS."bootstrap.min.js");
// load custom JavaScript 
echo script_tag(JS."script.js");
// load Extra javascript
foreach($javascript as $js):
  echo script_tag(JS.$js);
endforeach;
?>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
