<?php


namespace Mageplaza\HelloWorld\Controller\Adminhtml\View;


use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Mageplaza\HelloWorld\Model\ResourceModel\Post\CollectionFactory;

class massDelete extends \Magento\Backend\App\Action
{
    protected $filter;
    protected $collection;
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory)
    {
        $this->collection = $collectionFactory;
        $this->filter = $filter;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collection->create());
        $collectionSize = $collection->getSize();

        foreach ($collection->getItems() as $page) {
            $page->delete();
        }

        $this->messageManager->addSuccessMessage(__('A total of %1 record(s) have been deleted.', $collectionSize));

        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);

        return $resultRedirect->setPath('*/*/');
    }



}
