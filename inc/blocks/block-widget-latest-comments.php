<?php

/**
 * Latest Comments Block Widget
 *
 * @package Bootscore
 * @version 5.4.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Latest Comments Block
 */
if (!function_exists('bootscore_block_widget_latest_commentss_classes')) {
  /**
   * Adds Bootstrap classes to latest comments block widget.
   *
   * @param string $block_content The block content.
   * @param array  $block         The full block, including name and attributes.
   * @return string The filtered block content.
   */
  function bootscore_block_widget_latest_commentss_classes($block_content, $block) {

    $search  = array(
      'wp-block-latest-comments',
      '<li class="wp-block-latest-comments bs-list-group list-group__comment">',
      'avatar avatar-48 photo wp-block-latest-comments bs-list-group list-group__comment-avatar',
      '<a class="wp-block-latest-comments bs-list-group list-group__comment-author',
      '<a class="wp-block-latest-comments bs-list-group list-group__comment-link',
      'wp-block-latest-comments bs-list-group list-group__comment-date',
      '<p',
    );
    $replace = array(
      'wp-block-latest-comments bs-list-group list-group',
      '<li class="list-group-item list-group-item-action text-body-secondary d-flex align-items-start">',
      'rounded-pill border p-1 me-2',
      '<a class="text-decoration-none text-body-secondary',
      '<a class="stretched-link text-decoration-none d-block',
      'small',
      '<p class="text-body mb-0"',
    );

    return str_replace($search, $replace, $block_content);
  }
}
add_filter('render_block_core/latest-comments', 'bootscore_block_widget_latest_commentss_classes', 10, 2);