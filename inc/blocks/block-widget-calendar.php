<?php

/**
 * Calendar Block Widget
 *
 * @package Bootscore
 * @version 5.4.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Calendar Block
 */
if (!function_exists('bootscore_block_widget_calendar_classes')) {
  /**
   * Adds Bootstrap classes to calendar block widget.
   *
   * @param string $block_content The block content.
   * @param array  $block         The full block, including name and attributes.
   * @return string The filtered block content.
   */
  function bootscore_block_widget_calendar_classes($block_content, $block) {

    $search  = array(
      'wp-block-calendar',
      'wp-calendar-table',
    );
    $replace = array(
      'table-responsive',
      'table mb-0',
    );

    return str_replace($search, $replace, $block_content);
  }
}
add_filter('render_block_core/calendar', 'bootscore_block_widget_calendar_classes', 10, 2);