<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
*This is our demo block.
*/
#[Block(
    id: "date_time_block",
    admin_label: new TranslatableMarkup('Current Time Block'),
    category: new TranslatableMarkup('Block Demo')
)]


class DateBlock extends BlockBase {
     /**
     * {@inheritdoc}
     */
    public function build(){
        $current_date = \Drupal::time()->getCurrentTime();
        $build['#cache'] = ['max-age' => 0];

        $date_today = $this->t('Hi, today is :day of week @week of @year.', [
            ':day' => date('l', $current_date),
            '@week' => date('W', $current_date),
            '@year' => date('Y', $current_date),

        ]);
        
        // Let's set the time to East African Time (EAT)
        $time_eat = new \DateTime('now', new \DateTimeZone('Africa/Nairobi'));

        $time = $this->t(' The time is @time', ['@time' => $time_eat->format('H:i:s'),]);
        

        $build = ['#markup' => $date_today . $time];

        return $build;

    }
}
