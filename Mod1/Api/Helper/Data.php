<?php
namespace Mod1\Api\Controller\Index;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function snakeToCamel($snake)
    {
        $camel = ucwords($snake, '_');
        return str_replace('_', '', $camel);
    }
}