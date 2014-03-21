<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title())?></title>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="<?php echo html($site->title()) ?>" />
  <meta property="og:description" content="<?php echo html($site->description()) ?>" />
  <meta property="og:image" content="<?php echo u('assets/images/fb-thelobby.jpg') ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo thisURL() ?>" />


  <?php echo css('assets/styles/styles.css') ?>

<script type="text/javascript">
/*
** Load Aperću
*/
WebFontConfig = { fontdeck: { id: '39322' } };

(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
/*
** Delay fb load
*/
 function renderFbLike() {
        var parent = document.getElementById('fblikediv');
    var child = document.getElementById('fblikeimg');
    parent.removeChild(child);
        
    var html = '<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthelob.by&amp;width=227&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21&amp;appId=632186810182446" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:127px; height:21px;" allowTransparency="true"></iframe>';
        document.getElementById('fblikediv').innerHTML = html;
}
</script>

</head>

<header class="full hide-phone">
</header>