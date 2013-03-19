<?php
class Oliver_Campaigns_Adminhtml_CampaignsbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Campaigns"));
	   $this->renderLayout();
    }
}