<?php
namespace Hanhan\Leccion2\Controller\Index;

class Salidarawdata extends \Magento\Framework\App\Action\Action
{
 /**Esta factoría es generada en generated. No existe físicamente. generated/code/Magento/Framework/Controller/Result/
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $resultRawFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        parent::__construct($context);
        $this->resultRawFactory = $resultRawFactory;
    }

    /**
     *
     * @return string
     */
    protected function _saludar()
    {
        return 'Leccion2: raw data hola mundo';
    }

    /**
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($this->_saludar());
    }
}
