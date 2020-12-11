<?php


namespace Tuandz\Test\Controller\Adminhtml\Test;


use Magento\Framework\App\Action\Context;
use Magento\Framework\Mail\MessageInterface;
use Magento\Framework\Mail\TransportInterfaceFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_mailMessage;
    protected $_mailTransportFactory;
    public function __construct(Context $context,
                                MessageInterface $_mailMessage,
                                TransportInterfaceFactory $_mailTransportFactory)
    {
        $this->_mailMessage = $_mailMessage;
        $this->_mailTransportFactory = $_mailTransportFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        echo 1;
        die;
//        $this->_mailMessage->setMessageType(MessageInterface::TYPE_HTML)
//            ->addTo('tuannguyen190499@gmail.com')
//            ->setBody('hello')
//            ->setSubject('tuandz')
//            ->setFromAddress(
//                'tuannguyen190499@gmail.com',
//                'Hibaa'
//            );
//
//        $mailTransport = $this->_mailTransportFactory->create(['message' => $this->_mailMessage]);
//        try {
//            $mailTransport->sendMessage();
//        } catch (\Exception $e) {
//            throw new \Magento\Framework\Exception\LocalizedException(__('%1', $e->getMessage()));
//        }
    }
}
