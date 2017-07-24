<?php

class FW_Paywall_Model_Observer {
    /**
     * This function is triggered by a Magento observer declared
     * in etc/config.xml
     *
     * @param Varien_Event_Observer $observer
     */
    public function AddUser($observer)
    {
        // Your magic code goes here...
        $event = $observer->getEvent()->getControllerAction()->getFullActionName();

        Mage::log('Event Fired: ' . $event);
        Mage::log('yeah i am in observer !! it works' , null , 'mylog.log');
        die();
    }
}
