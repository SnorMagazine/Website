<div class="full">
	<div class="row">
		<section id="about" class="threaded grid_8 offset_2">
				<h1 name="<?php echo html($data->title()) ?>" class="title"><?php echo html($data->title()) ?></h1>
				
				<?php foreach($data->children()->visible() as $child): ?>
				
				<article class="blog">
					<h3 name="<?php echo html($child->uid()) ?>" class="blog-title"><?php echo html($child->title());?></h3>
					<time datetime="<?php echo $child->date('c') ?>" pubdate="pubdate" class="blog-date"><?php echo html($child->date('M d, Y')) ?></time>

				<?php if($child->hasImages()): ?>
					<div id="slider" class="row swipe">
					<?php foreach($child->images() as $image): ?>
				      <div class="swipe-wrap">
				          <img src="<?php echo $image->url() ?>" height="<?php $image->height() ?>" class="grid_8"/></img>
				      </div>
					<?php endforeach ?>
					</div>
				<?php endif ?>
				<?php echo kirbytext($child->text()) ?>
				</article>
				<? endforeach ?>
		</section>
	</div>
</div>