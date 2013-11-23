<?php

/**
 * @file
 * Contains \Drupal\media_entity\MediaBundleInterface.
 */

namespace Drupal\media_entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a media bundle entity.
 */
interface MediaBundleInterface extends ConfigEntityInterface {

  /**
   * Returns the configured node type settings of a given module, if any.
   *
   * @param string $module
   *   The name of the module whose settings to return.
   *
   * @return array
   *   An associative array containing the module's settings for the node type.
   *   Note that this can be empty, and default values do not necessarily exist.
   */
  public function getModuleSettings($module);

  /**
   * Determines whether the node type is locked.
   *
   * @return string|false
   *   The module name that locks the type or FALSE.
   */
  public function isLocked();

}