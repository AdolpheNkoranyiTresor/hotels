<?php
namespace Drupal\my_form_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
*This is our Form rendered as block.
*/
#[Block(
    id: "form_to_block",
    admin_label: new TranslatableMarkup('Form to Block'),
    category: new TranslatableMarkup('Form to Block Demo')
)]

class ColourFormBlock extends BlockBase {
    public function build(){
        $form = \Drupal::formBuilder()->getForm('Drupal\my_form_demo\Form\ColourForm');

        return $form;
    }
}