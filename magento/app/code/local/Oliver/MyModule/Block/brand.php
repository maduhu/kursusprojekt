<?php
class Oliver_MyModule_Block_brand extends Mage_Core_Block_Template {

    public function __construct() {
        parent::_construct();
        $this->setTemplate('mymodule/brand.phtml');
    }
}