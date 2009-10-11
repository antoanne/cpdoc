<div id="YouTubeFeedTumb">
<?php
   if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
     print str_replace("lightframe[youtube_feed|width:441; height:366;]", "lightframe[|width:461; height:386;]", $output);
   else
     print $output;
?>
</div>