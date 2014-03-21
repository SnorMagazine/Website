<?php snippet('header') ?>
<?php snippet('menu') ?>
<div style="margin-top:30px; height:400px;" class="row">
  		<article class="grid_9 offset_2">
    		<h1 name="<?php echo html($page->uid()) ?>" class="title"><?php echo html($page->title()) ?></h1>
  	 	 <?php echo kirbytext($page->text()) ?>
  		</article>
</div>
