<?php 
function main_style() {

$scss_path = get_template_directory().'/styles/stylesheet.scss'; 
$css_path = get_template_directory().'/styles/stylesheet.css'; 
$scss_ini = get_template_directory().'/scssphp/scss.inc.php';

//check scss 
if(file_exists($scss_path) && count(file($scss_path)) > 1 && (fileatime($scss_path) > fileatime($css_path))  && file_exists($scss_ini) ){
  include $scss_ini;
  // check class
  if (class_exists('ScssPhp\ScssPhp\Compiler')) {
      $compiler = new \ScssPhp\ScssPhp\Compiler();
      $compiler->setImportPaths(TEMPLATEPATH .'/styles/');
      $result = $compiler->compileString('@import "stylesheet.scss";');
      file_put_contents($css_path  , $result->getCss());
  }
}
//upload stylesheet
wp_enqueue_style('main_style', get_theme_file_uri() . '/styles/stylesheet.css' );
//icons
wp_enqueue_style('bootstrap-icons', get_theme_file_uri() . '/styles/fonts/bootstrap-icons/font/bootstrap-icons.min.css' );
wp_enqueue_style('fontawesome', get_theme_file_uri() . '/styles/fonts/fontawesome/css/fontawesome.min.css') ;

//js  bootatsrap components don't work - way?
 wp_enqueue_script('jquery',get_theme_file_uri().'/styles/js/query-3.7.1.min.js');
 wp_enqueue_script('bootstrap-5',get_theme_file_uri() . '/styles/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'main_style');


function features() {
  //add menu location
    register_nav_menus( array( 'headerMenu'  => 'Header Menu' , 'footerMenu' => 'Footer Menu') );
  //add meta title  
    add_theme_support('title-tag');
  }

add_action('after_setup_theme', 'features');

//add logo
require get_template_directory() . '/inc/customizer.php';


