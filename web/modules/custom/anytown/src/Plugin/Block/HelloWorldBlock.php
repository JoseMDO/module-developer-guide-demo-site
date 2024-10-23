<?php

declare(strict_types=1);

namespace Drupal\anytown\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a hello world block.
 */
#[Block(
  id: 'anytown_hello_world',
  admin_label: new TranslatableMarkup('Hello World'),
  category: new TranslatableMarkup('Custom')
)]
class HelloWorldBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('Hello, World!'),
      '#markup' => $this->t(date('Y/m/d')),
    ];
    return $build;
  }

}
