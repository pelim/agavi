<?php

/**
 * Data file for America/Cayman timezone, compiled from the olson data.
 *
 * Auto-generated by the phing olson task on 01/29/2009 09:07:19
 *
 * @package    agavi
 * @subpackage translation
 *
 * @copyright  Authors
 * @copyright  The Agavi Project
 *
 * @since      0.11.0
 *
 * @version    $Id$
 */

return array (
  'types' => 
  array (
    0 => 
    array (
      'rawOffset' => -18432,
      'dstOffset' => 0,
      'name' => 'KMT',
    ),
    1 => 
    array (
      'rawOffset' => -18000,
      'dstOffset' => 0,
      'name' => 'EST',
    ),
  ),
  'rules' => 
  array (
    0 => 
    array (
      'time' => -2524502068,
      'type' => 0,
    ),
    1 => 
    array (
      'time' => -1827687168,
      'type' => 1,
    ),
  ),
  'finalRule' => 
  array (
    'type' => 'static',
    'name' => 'EST',
    'offset' => -18000,
    'startYear' => 1913,
  ),
  'name' => 'America/Cayman',
);

?>