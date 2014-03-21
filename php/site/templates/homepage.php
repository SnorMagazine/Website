<?php

snippet('header');
snippet('menu');
snippet('entry');


foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

snippet('email');
snippet('footer');

?>