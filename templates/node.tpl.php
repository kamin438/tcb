<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php print $user_picture; ?>
  
  <?php if ($display_submitted): ?>
    <p class="submitted">
      <?php print format_date($node->created, 'custom', "F j, Y"); ?>
      <!--— <?php print $name; ?>-->
    </p>
  <?php endif; ?>

  <div class="content">
    <?php 
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
     ?>
  </div>
  
  <!--
  <?php if (!empty($content['links']['terms'])): ?>
    <div class="terms"><?php // print render($content['links']['terms']); ?></div>
  <?php endif;?>
  
  <?php if (!empty($content['links'])): ?>
    <div class="links"><?php //print render($content['links']); ?></div>
  <?php endif; ?>
  -->

</div>

<?php print render($content['comments']); ?>