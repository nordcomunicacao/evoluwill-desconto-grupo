<?php
/**
 * Header do tema
 * 
 * @package Achados_EVOLUWILL
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo esc_attr(get_theme_mod('site_description', 'Os melhores descontos para quem acompanha Willian Tressmann nas redes sociais.')); ?>">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php echo esc_attr(get_theme_mod('site_description', 'Os melhores descontos para quem acompanha Willian Tressmann nas redes sociais.')); ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/willian-profile.jpeg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr(get_theme_mod('site_description', 'Os melhores descontos para quem acompanha Willian Tressmann nas redes sociais.')); ?>">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
