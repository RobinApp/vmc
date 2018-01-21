<?php
/**
* Template Name: Verkstad
*
* Workshop Page
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

<?php
  // See http://www.whatismyip.com/automation for the exact URL
  echo file_get_contents(
    "https://api.ipify.org/");
?>

<?php  dynamic_sidebar('sidebar-8'); ?> <!-- TacdisEcom Widget -->

<?php
get_footer();