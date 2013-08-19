<?php
/**
 * Magento
 *
 * Override Mage_Checkout_CartController
 */

require_once("../../../../core/Mage/Checkout/controllers/CartController.php");
require_once("Mage/Checkout/controllers/CartController.php");

class Oliver_Checkout_Checkout_CartController extends Mage_Checkout_CartController
{
    public function indexAction() {

        error_log('Yes, I did it!');

        echo "YES";

        parent::indexAction();
    }

    public function addAction()
    {
        parent::addAction();
    }
}
