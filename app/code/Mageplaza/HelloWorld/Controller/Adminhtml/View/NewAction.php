<?php


namespace Mageplaza\HelloWorld\Controller\Adminhtml\View;

use Magento\Backend\App\Action;
use Mageplaza\HelloWorld\Model\Post;
class NewAction extends \Magento\Backend\App\Action
{
    /**
     * Edit A Contact Page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        $postDatas = $this->getRequest()->getParam('post');
        if(is_array($postDatas)) {
            $post = $this->_objectManager->create(Post::class);
            $post->setData($postDatas)->save();
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}

