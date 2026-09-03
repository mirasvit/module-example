<?php

namespace Mirasvit\Example\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Tabbed extends Template
{
    protected $_template = "tabbed.phtml";

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}