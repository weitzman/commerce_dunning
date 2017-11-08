<?php

/**
 * Pass an orderID as first argument. Otherwise, Order 1 is used.
 */

use Drupal\commerce_order\Entity\Order;

$id = $extra[0] ?: 1;
$order = Order::load($id);

$dispatcher = \Drupal::service('event_dispatcher');
$dispatcher->dispatch('commerce_payment.decline'); // @todo pass an Event
