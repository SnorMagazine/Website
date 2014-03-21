<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="row">
  		<article class="grid_9 offset_2">
    		<h1 name="<?php echo html($page->uid()) ?>" class="title"><?php echo html($page->title()) ?></h1>
  	 	 <?php echo kirbytext($page->text()) ?>
  		</article>
</div>
<?php snippet('footer') ?>