<?php
// $Id: page.tpl.php,v 1.8 2009/01/29 14:32:52 troy Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language ?>" xml:lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>" id="html-main">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript" language="javascript">
    var min=8;
    var max=18;
    function increaseFontSize() {
       var p = document.getElementsByTagName('p');
       for (i=0; i<p.length; i++){
          if (p[i].style.fontSize) {
             var s = parseInt(p[i].style.fontSize.replace("px",""));
          } else {
             var s = 14;
          }
          if(s!=max) {
             s += 1;
          }
          p[i].style.fontSize = s+"px";
       }
    }
    function decreaseFontSize() {
       var p = document.getElementsByTagName('p');
       for(i=0;i<p.length;i++) {
          if(p[i].style.fontSize) {
             var s = parseInt(p[i].style.fontSize.replace("px",""));
          } else {
             var s = 14;
          }
          if(s!=min) {
             s -= 1;
          }
          p[i].style.fontSize = s+"px";
       }
    }
</script>

  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body class="body-main">
<div class="Azes make-it-center">
    <a href="javascript:decreaseFontSize();" class="Azinho">A</a>
    <a href="javascript:increaseFontSize();" class="Azao">A</a>
</div>

<div id="top" class="clear-block"><!-- top -->
<!-- / make-it-center --><div class="make-it-center">
<!-- logo-container -->
<div id="logo-container">
  <div id="logo<?php if ($logo && !$site_name && !$site_slogan): ?>-no-padding<?php endif; ?>">
	<?php if ($logo): ?> 
            <div id="logo-picture">
            <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
            </div>
        <?php endif; ?>
  </div>
  <!-- login -->
     <div id="login">
        <?php echo $top_right ?>
     </div>
  <!-- /login -->
</div>
<!-- /logo-container -->
</div><!-- / make-it-center -->
</div>

<!-- 
<div class="primary-menu clear-block">
<div class="make-it-center">
	<?php if (isset($primary_links)) : ?>
        <?php echo theme('links', $primary_links, array('class' => 'kwicks')) ?>
    <?php endif; ?>
</div>
</div>
-->


<div class="primary-menu clear-block">
    <div class="make-it-center"><!-- / make-it-center -->
        <div id="menu clear-block">
            <?php echo $menu; ?>
        </div>
    </div>
</div>
<?php if (!empty($sub_menu)) : ?>
<div class="secundary-menu clear-block">
    <div class="make-it-center"><!-- / make-it-center -->
        <div id="sub_menu clear-block">
            <?php echo $sub_menu; ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="make-it-center"><!-- / make-it-center -->
	<div id="content_top_left">
		<?php echo $content_top_left; ?>
	</div>
	<div id="content_top_right">
		<?php echo $content_top_right; ?>
	</div>
</div>


<div class="make-it-center"><!-- / make-it-center -->
	<?php print $breadcrumb ?>
    <div class="tabs"><?php print $tabs ?></div>
    <?php if ($show_messages) { print $messages; } ?>
<?php echo $content; ?>
</div><!-- / make-it-center -->


<div id="footer" class="clear-block"><!-- footer -->
<div class="make-it-center"><!-- / make-it-center -->
 <div class="clear-both">
  <?php echo $footer_message ?>
  <?php echo $footer ?>
</div>
</div><!-- / make-it-center -->
</div><!-- /footer -->

<?php print $closure ?>
</body>
</html>