<?php
namespace Ahmad\RFQ\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    /**
     * @var ScopeConfigInterface 
     */ 
    protected $scopeConfig;

    /**
     * Data constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig

    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function isEnable()
    {
        return $this->scopeConfig->getValue(
            'rfq/general/enable',
            ScopeInterface::SCOPE_STORE
        );
    }
}