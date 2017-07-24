<?php
class FW_Paywall_Helper_Data extends Mage_Core_Helper_Abstract {
		
	public function isTrackingAllowed() {
        return Mage::getStoreConfigFlag('paywallmodule/fwpw/enabled');
    }
}