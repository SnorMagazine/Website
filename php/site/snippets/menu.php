<nav class="menu fixed-left show-screen">
  <ul>
      <li id="site-title"><a href="<?php echo url() ?>" title="Home"><?php echo html($site->title()) ?></a></li>
    <?php foreach($pages->visible() AS $p): ?>

    	<?php if ($p->template() == "link"): ?>
    	<li class="nav-item"><span><a href="<?php echo $p->website() ?>" target="_blank"><?php echo html($p->title()) ?></a></span></li>
    
      <?php elseif($p->template() == "social"): ?>
      <!--hide social-->
		  <?php else: ?>

    	<li name="<?php echo html($p->uid()) ?>" class="nav-item"><span><a href="<?php echo url()?>#<?php echo html($p->uid()) ?>"><?php echo html($p->title()) ?></span></a></li>
   		
      <?php endif ?>

    <?php endforeach ?>
  </ul>
</nav>