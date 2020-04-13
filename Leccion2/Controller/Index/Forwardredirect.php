<?php
namespace Hanhan\Leccion2\Controller\Index;

class Forwardredirect extends \Magento\Framework\App\Action\Action
{

    protected $resultForwardFactory;


    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
    ) {
        parent::__construct($context);
        $this->resultForwardFactory = $forwardFactory;
    }

    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Forward $resultForward */
        $resultForward = $this->resultForwardFactory->create();
        $resultForward->setModule('hanhan_leccion2'); //vendor_modulename en minúscula
        $resultForward->setController('index'); // controllName
        $resultForward->forward('index'); // actionName

        return $resultForward;
    }
}
