<?php

namespace Drupal\commerce_recurring\Plugin\RulesAction;

use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\commerce_price\Price;
use Drupal\rules\Core\RulesActionBase;

/**
 * Provides a 'Replace listing price by the initial order item price for recurring' action.
 *
 * @RulesAction(
 *   id = "commerce_recurring_set_order_item_price",
 *   label = @Translation("Replace listing price by the initial order item price for recurring"),
 *   category = @Translation("Commerce Recurring"),
 *   context = {
 *     "commerce_order_item" = @ContextDefinition("commerce_order_item",
 *       label = @Translation("Order Item"),
 *       description = @Translation("Specifies the order item, which should be updated.")
 *     ),
 *     "listing_price" = @ContextDefinition("commerce_price",
 *       label = @Translation("Price used for listings"),
 *     ),
 *     "initial_price" = @ContextDefinition("commerce_price",
 *       label = @Translation("Price used for initial recurring"),
 *     ),
 *     "recurring_price" = @ContextDefinition("commerce_price",
 *       label = @Translation("Price used for consequent recurrings"),
 *     )
 *   }
 * )
 */
class SetOrderItemPrice extends RulesActionBase {

  /**
   * Replace listing price by the initial order item price for recurring.
   *
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $order_item
   *   The order item entity.
   * @param \Drupal\commerce_price\Price $listing_price
   *   The priced used object for listings.
   * @param \Drupal\commerce_price\Price $initial_price
   *   The priced used object for initial recurring.
   * @param \Drupal\commerce_price\Price $recurring_price
   *   The price used object for consequent recurrings.
   */
  protected function doExecute(OrderItemInterface $order_item, Price $listing_price, Price $initial_price, Price $recurring_price) {
    // @todo Make this once pricing is finished.
  }

}
