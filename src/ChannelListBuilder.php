<?php

namespace Drupal\applenews;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Provides a listing of Applenews Channel.
 */
class ChannelListBuilder extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['name'] = $this->t('Name');
    $header['id'] = $this->t('Channel ID');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /** @var \Drupal\applenews\Entity\ApplenewsChannel $entity */
    $row['name'] = $entity->getName();
    $row['id'] = $entity->getId();
    return $row + parent::buildRow($entity);
  }

}
