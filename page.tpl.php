<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language->language ?>" xml:lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>" id="html-main">

<head>
  <?php print $head ?>
<link rel="alternate" type="application/atom+xml" title="CPDOC Atom Feed" href="/rss.xml" />
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
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
</head>

<body class="body-main">

	<!-- / topmenu -->
				<?php if (!empty($topmenu)) : ?> 
				<div class="topmenu"><div class="make-it-center"><?php echo $topmenu; ?></div></div>
				<?php endif; ?>
	<!-- topmenu -->
	<!-- top -->

	<div id="top" class="clear-block">
				
		<div class="make-it-center">
				
				<!-- logo-container -->				
				<div id="logo-container">
					<div id="logo<?php if ($logo && !$site_name && !$site_slogan): ?>-no-padding<?php endif; ?>">
						<?php if ($logo): ?> 
						<div id="logo-picture">
	            		<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
						</div>
						<?php endif; ?>
					</div>
					<div id="ImgCabecalhoSite"><img src="/sites/default/files/imagens/sobre/cabecalhoGV.gif" alt=""/></div>
					<!-- login -->
					<!--div id="login">
						<?php echo $top_right ?>
					</div-->
					<!-- / login -->
				</div>
				<!-- / logo-container -->
		</div>
	</div>
	<!-- / top -->

	<!-- / menu principal -->
	<?php if (!empty($menu)) : ?> 
	<div class="fundo-menu">
			<?php echo $menu; ?>
		  	<div class="Azes">
				<a href="javascript:decreaseFontSize();" class="Azinho">A<sup>-</sup></a>
				<a href="javascript:increaseFontSize();" class="Azao">A<sup>+</sup></a>
		  	</div>
			<div class="share-icones"><a class="addthis_button_favorites">&nbsp;</a> 
									  <a class="addthis_button_email">&nbsp;</a> 
									  <a class="addthis_button_print">&nbsp;</a> 
									  <a href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4a510f1d4557ce27" class="addthis_button_expanded"></a>
									  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4a510f1d4557ce27"></script>
 		    </div>
	</div>
	<?php endif; ?>
	<!-- menu principal -->

	<!-- / cabec -->
	<?php if (!empty($cabec)) : ?> 
	<div class="cabec"><div class="make-it-center"><?php echo $cabec; ?></div></div>
	<?php endif; ?>
	<!-- cabec -->


<!-- corpo -->	
<div class="corpo">

	
	<!-- content_top* -->
	<div class="make-it-center">
		<div id="content_top_left"><?php echo $content_top_left; ?></div>
		<div id="content_top_right"><?php echo $content_top_right; ?></div>
	</div>
	<!-- / content_top* -->

	<!-- content* -->
	<div class="make-it-center"> 
	<!-- drupal messages -->
	<!-- <?php print $breadcrumb ?> -->
	     <div class="tabs"><?php print $tabs ?></div> 
	<!-- <?php if ($show_messages) { print $messages; } ?> -->
	<!-- / drupal messages -->
	
	<!-- content_left -->
	<?php if($content_left){ ?>
		<div id="content_left"><?php echo $content_left; ?></div>
	<?php } ?>
	<!-- / content_left -->
	
	<!-- content -->
	<div id="content" style=<?php print '"width:'.template_width( $content_left, $content_right).'px;">' ?>
		<?php echo $content; ?>
	</div>
	<!-- / content -->
	
	<!-- content_right -->
	<?php if($content_right){ ?>
		<div id="content_right"><?php echo $content_right; ?></div>
	<?php } ?>
	<!-- / content_right -->

	</div>
	<!-- content* -->

	<!-- footer -->
	<div id="footer" class="clear-block">
		<!-- footer menu -->
		<div id="footer-menu"><?php echo $footer_menu ?>
		<div id="footer-setas"><a href="javascript:history.go(-1)"><img src="<?php echo base_path().file_directory_path(); ?>/imagens/seta1.gif" alt="Página anterior" width="17" height="17" border="0"></a>
			   <a href="#top"><img src="<?php echo base_path().file_directory_path(); ?>/imagens/seta2.gif" width="32" height="19" border="0" alt="Topo da P&aacute;gina"></a>		
		</div></div> 	
		<!-- / footer menu -->

		<!-- footer message -->
		<!--div class="make-it-center">
		<div class="clear-both">
			<?php echo $footer_message ?>
			<?php echo $footer ?>
		</div>
		</div-->
		<!-- footer message -->
	</div>
	<!-- /footer -->

</div>
<!-- /corpo -->

		<!-- links rodapé -->
		
		<div class="clear-both">
			<?php echo $linksrodape ?>
		</div>
		
		<!-- links rodapé -->	
	
<?php print $closure ?>

</body>
</html>