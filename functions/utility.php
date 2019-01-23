<?php
/**
 * helper function to include files from the template-parts folder (allows variables to be passed)
 * usage: include module('hero'); or include(module('hero','large'));
 */
function module($part1, $part2 = '') {
  $hyphen = '';

  if ($part2 != '') { $hyphen = '-'; }

  return locate_template('modules/' . $part1 . $hyphen . $part2 . '.php');
}

// function to include function partials
function include_function($filename) {
  return require_once( dirname( __FILE__ ) . '/' . $filename . '.php' );
}
?>
