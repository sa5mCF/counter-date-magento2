<?php


namespace Core\Contador\Helper;

use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;


class Data extends  \Magento\Framework\App\Helper\AbstractHelper
{
    protected $scopeConfig;

    /**
     * @param Magento\Store\Model\ScopeInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * @param $config_path
     * @return mixed
     */
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            ScopeInterface::SCOPE_STORE
        );

    }
}
