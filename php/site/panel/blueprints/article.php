<?php if(!defined('KIRBY')) exit ?>

# article blueprint

title: Article
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  date: 
    label: Article Date
    type:   date
    format: dd.mm.yy