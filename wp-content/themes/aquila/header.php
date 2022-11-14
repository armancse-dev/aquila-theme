<?php
/**
 * Header file.
 * 
 * @package Aquila
 * 
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
   <meta charset="<?php bloginfo('charset') ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php wp_title(); ?></title>
   <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >
<?php 
   if (function_exists( 'wp_body_open' ) ){
      wp_body_open();
   }
?>
<header>
   <h2>header</h2>
</header>