<?php
namespace Baldha\WhatsAppContact\Block;

class Button extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * Button constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->_scopeConfig = $context->getScopeConfig();
        parent::__construct($context, $data);
    }

    /**
     * Return status
     *
     * @return string
     */

    public function getStatus(){
        return $this->_scopeConfig->getValue('contact/whatsapp_contact/status',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Return phone
     *
     * @return string
     */

    public function getPhone(){
        return $this->_scopeConfig->getValue('contact/whatsapp_contact/phone',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Return message
     *
     * @return string
     */

    public function getMessage(){
        return $this->_scopeConfig->getValue('contact/whatsapp_contact/message',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}