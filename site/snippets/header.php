<!DOCTYPE html>
<html lang="<?php echo $kirby->language() ?? 'fr' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php snippet("header.metas") ?>

  <?= css('assets/css/main.css'); ?>

  <style>
    ol { counter-reset: list <?= $conversation->count() + 1; ?>}
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Trispace:wdth,wght@75..125,100..800&display=swap" rel="stylesheet"> 


</head>
<body
   data-login="<?php e($kirby->user(),'true', 'false') ?>"
   data-template="<?php echo $page->template() ?>"
   data-intended-template="<?php echo $page->intendedTemplate() ?>">
