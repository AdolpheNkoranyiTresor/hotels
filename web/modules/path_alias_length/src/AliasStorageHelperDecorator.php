<?php

namespace Drupal\path_alias_length;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\pathauto\AliasStorageHelperInterface;

/**
 * A decorator for the alias storage helper.
 */
class AliasStorageHelperDecorator implements AliasStorageHelperInterface {

  /**
   * Alias schema max length.
   *
   * @var int
   */
  protected int $aliasSchemaMaxLength = 1024;

  /**
   * The decorated alias storage helper service.
   *
   * @var \Drupal\pathauto\AliasStorageHelperInterface
   */
  protected AliasStorageHelperInterface $aliasStorageHelper;

  /**
   * The Decorator constructor.
   *
   * @param \Drupal\pathauto\AliasStorageHelperInterface $alias_storage_helper
   *   The decorated alias storage helper service.
   */
  public function __construct(AliasStorageHelperInterface $alias_storage_helper) {
    $this->aliasStorageHelper = $alias_storage_helper;
  }

  /**
   * {@inheritdoc}
   */
  public function getAliasSchemaMaxLength() {
    return $this->aliasSchemaMaxLength;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $path, $existing_alias = NULL, $op = NULL) {
    return $this->aliasStorageHelper->save($path, $existing_alias, $op);
  }

  /**
   * {@inheritdoc}
   */
  public function loadBySource($source, $language = LanguageInterface::LANGCODE_NOT_SPECIFIED) {
    return $this->aliasStorageHelper->loadBySource($source, $language);
  }

  /**
   * {@inheritdoc}
   */
  public function deleteBySourcePrefix($source) {
    return $this->aliasStorageHelper->deleteBySourcePrefix($source);
  }

  /**
   * {@inheritdoc}
   */
  public function deleteAll() {
    return $this->aliasStorageHelper->deleteAll();
  }

  /**
   * {@inheritdoc}
   */
  public function deleteEntityPathAll(EntityInterface $entity, $default_uri = NULL) {
    return $this->aliasStorageHelper->deleteEntityPathAll($entity, $default_uri);
  }

  /**
   * {@inheritdoc}
   */
  public function loadBySourcePrefix($source) {
    return $this->aliasStorageHelper->loadBySourcePrefix($source);
  }

  /**
   * {@inheritdoc}
   */
  public function countBySourcePrefix($source) {
    return $this->aliasStorageHelper->countBySourcePrefix($source);
  }

  /**
   * {@inheritdoc}
   */
  public function countAll() {
    return $this->aliasStorageHelper->countAll();
  }

  /**
   * {@inheritdoc}
   */
  public function deleteMultiple($pids) {
    return $this->aliasStorageHelper->deleteMultiple($pids);
  }

}
