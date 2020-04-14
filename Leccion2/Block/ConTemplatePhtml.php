<?php
namespace Hanhan\Leccion2\Block;
class ConTemplatePhtml extends \Magento\Framework\View\Element\Template
{
    public function saludar()
    {
    	return "Leccion2: llamar un método del block desde el controlador";
    }

    public function toHtml()
    {
    	return $this->saludar();
    }
}
