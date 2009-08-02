<div id="YouTube">
<h3>SELEÇÃO DE VÍDEOS</h3>
<?php foreach ($rows as $id => $row): ?>
  <div id="YouTubeFeed" class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
	<div id="YouTubeMais"><a href="">+ ver todos os vídeos</a></div>
</div>