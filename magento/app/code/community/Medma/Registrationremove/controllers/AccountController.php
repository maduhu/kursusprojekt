<?php 
/**
 * Customer Disable Registration.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Team
 * that is bundled with this package of Medma Infomatix Pvt. Ltd.
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * Contus Support does not guarantee correct work of this package
 * on any other Magento edition except Magento COMMUNITY edition.
 * =================================================================
**/

require_once 'Mage/Customer/controllers/AccountController.php';

class Medma_Registrationremove_AccountController extends Mage_Customer_AccountController
{
     	public function createAction() //Disables create customer action and redirects it to login page
	 {
	 if(Mage::getStoreConfig('disableregistration/isEnable/ENABLED'))
	 {
	 $this->_redirect('*/*');
	 return;
	 }

	 parent::createAction();
	 }

	 public function createPostAction() //Disables create customer action and redirects it to login page
	 {
	 if(Mage::getStoreConfig('disableregistration/isEnable/ENABLED'))
	 {
	 $this->_redirect('*/*');
	 return;
	 }

	 parent::createPostAction();
	 }


} ?>
