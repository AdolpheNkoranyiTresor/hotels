<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
*This is our demo block.
*/
#[Block(
    id: "user_info_block",
    admin_label: new TranslatableMarkup('User Info Block'),
    category: new TranslatableMarkup('Block Demo')
)]


class UserInfoBlock extends BlockBase {
     /**
     * {@inheritdoc}
     */
    public function build(){

        $current_user = \Drupal::currentUser();
        $user = ucfirst($current_user->getDisplayName());

        $build = [
            '#markup' => $this->t("You are currently logged in as @user", ['@user' => $user]),
        ];

        $build['#cache']['contexts'][] = 'user';
        $build['#cache']['tags'][] = 'user:' . $current_user->id();

        return $build;
    }
}
