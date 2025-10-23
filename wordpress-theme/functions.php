<?php
/**
 * Funções do tema
 * 
 * @package Achados_EVOLUWILL
 */

// Configuração do tema
function achados_evoluwill_setup() {
  // Suporte a título dinâmico
  add_theme_support('title-tag');
  
  // Suporte a imagens destacadas
  add_theme_support('post-thumbnails');
  
  // Suporte a HTML5
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'achados_evoluwill_setup');

// Enfileirar estilos
function achados_evoluwill_scripts() {
  wp_enqueue_style('achados-evoluwill-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'achados_evoluwill_scripts');

// Customizador do WordPress
function achados_evoluwill_customize_register($wp_customize) {
  // Seção de configurações
  $wp_customize->add_section('achados_evoluwill_settings', array(
    'title' => __('Configurações da Landing Page', 'achados-evoluwill'),
    'priority' => 30,
  ));
  
  // Link do grupo WhatsApp
  $wp_customize->add_setting('whatsapp_group_link', array(
    'default' => 'https://chat.whatsapp.com/SEU_LINK_AQUI',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control('whatsapp_group_link', array(
    'label' => __('Link do Grupo WhatsApp', 'achados-evoluwill'),
    'section' => 'achados_evoluwill_settings',
    'type' => 'url',
  ));
  
  // Descrição do site
  $wp_customize->add_setting('site_description', array(
    'default' => 'Os melhores descontos para quem acompanha Willian Tressmann nas redes sociais.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  
  $wp_customize->add_control('site_description', array(
    'label' => __('Descrição do Site', 'achados-evoluwill'),
    'section' => 'achados_evoluwill_settings',
    'type' => 'textarea',
  ));
}
add_action('customize_register', 'achados_evoluwill_customize_register');

// Remover itens desnecessários do admin
function achados_evoluwill_remove_menus() {
  if (!current_user_can('administrator')) {
    remove_menu_page('edit.php'); // Posts
    remove_menu_page('edit-comments.php'); // Comentários
  }
}
add_action('admin_menu', 'achados_evoluwill_remove_menus');
