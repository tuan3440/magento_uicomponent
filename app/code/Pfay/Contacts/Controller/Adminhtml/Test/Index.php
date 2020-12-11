<?php


namespace Pfay\Contacts\Controller\Adminhtml\Test;


use Magento\Backend\App\Action;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}

