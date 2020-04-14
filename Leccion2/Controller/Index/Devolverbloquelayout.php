<?php
namespace Hanhan\Leccion2\Controller\Index;
class Devolverbloquelayout extends \Magento\Framework\App\Action\Action
{
	protected $layoutFactory;
	protected $resultRawFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\LayoutFactory $layoutFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        parent::__construct($context);
        $this->layoutFactory = $layoutFactory;
        $this->resultRawFactory = $resultRawFactory;
    }

	public function execute()
    {
    	/**
		 *Traer los datos de html del método toHtml de la clase \Hanhan\Leccion2\Block\ConTemplatePhtml
		 * Luego redenrizarlo en la página. Recordar siempre hay que devolver un objeto tipo result
    	*/

        $output = $this->layoutFactory->create()
            ->createBlock(\Hanhan\Leccion2\Block\ConTemplatePhtml::class)
            ->toHtml();
        
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($output);
    }
}
