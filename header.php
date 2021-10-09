<!doctype html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
  <meta name="keywords" content="Tech Noir" />
  <meta name="description" content="Tech Noir" />

  <title>Tech Noir</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.typekit.net/vdc0qgz.css">
  <script src="https://kit.fontawesome.com/52d51e5636.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
</head>

<?php
if(is_front_page()):
  $tech_noir_classes = array('tech_noir_front_class', 'front_class');
else:
  $tech_noir_classes = array('no_tech_noir_front_class');
endif;
?>
<body <?php body_class($tech_noir_classes); ?>>
    <?php include (TEMPLATEPATH . '/navigation.php'); ?>

