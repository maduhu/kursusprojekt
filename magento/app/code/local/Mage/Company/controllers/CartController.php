<?php
/**
 * Magento
 *
 * Override Mage_Checkout_CartController
 */

require_once("../../../../core/Mage/Checkout/controllers/CartController.php");

class CheckoutExtended_CartController extends Mage_Checkout_CartController
{

    /**
     * Get current active quote instance
     *
     * @return Mage_Sales_Model_Quote
     */
    public function indexAction()
    {
        echo "This controller has been overridden.";
    }

}
