<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="home-news">
  <h2>DESTAQUES<div id="home-news-todas-noticias"><a href="">+ ver todas as notícias</a></div></h2>
  <div id="home-news-content">
<?php
$first = true;
$count = 0;
foreach ($rows as $id => $row):
	$count ++;
    if ($first == true):
        $first = false;
        ?><div id="home-news-first"><?php
            print $row;
        ?></div><?php
    else:
		if ($count == count($rows)) { 
        ?>        
        <div id="home-news-last-last">
        <?php
            print $row;
        ?></div><?php
		} else {
        ?>        
        <div id="home-news-last">
        <?php
            print $row;
        ?></div><?php
		}
    endif;
endforeach; ?>
	</div>
</div>

