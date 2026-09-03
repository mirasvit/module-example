<?php

namespace Mirasvit\Example\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Navigation extends Template
{
    protected $_template = "navigation.phtml";

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}