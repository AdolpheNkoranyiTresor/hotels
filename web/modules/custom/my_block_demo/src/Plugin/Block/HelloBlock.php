<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
*This is our demo block.
*/
#[Block(
    id: "hello_demo_block",
    admin_label: new TranslatableMarkup('Hello Demo Block'),
    category: new TranslatableMarkup('Block Demo')
)]


class HelloBlock extends BlockBase {
    public function build(){
        return [
            '#markup' => ("Hello world, I'm a block.")
        ];
    }
}
