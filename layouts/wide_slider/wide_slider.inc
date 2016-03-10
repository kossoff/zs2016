<?php

/**
 * Implements hook_panels_layouts()
 */

function pn2016_wide_slider_panels_layouts() {
  $items['wide_slider'] = array (
    'title'     => t('Wide Slider: 1 column row'),
    'category'  => t('Foundation: 1'),
    'icon'      => 'image.png',
    'theme'     => 'wide_slider',
    'regions'   => array(
                    'slider' => t('Slider'),
                    'middle' => t('Main column'))
  );

  return $items;
}
