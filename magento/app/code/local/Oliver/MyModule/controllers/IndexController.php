<?php
class Oliver_MyModule_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
}