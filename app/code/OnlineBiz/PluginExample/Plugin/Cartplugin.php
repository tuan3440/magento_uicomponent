<?php


namespace OnlineBiz\PluginExample\Plugin;


class Cartplugin
{
    public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject,$proceed){
        // before adding product to cart
        $productId = (int)$this->request->getParam('product', 0);
        $qty = (int)$this->request->getParam('qty', 1);
        // this will run the core addProduct function
        $returnValue = $proceed();
        // below code is executed after product is added to cart
        if ($returnValue)
        {
            // after adding product to cart
        }
        return $returnValue;
    }
}
