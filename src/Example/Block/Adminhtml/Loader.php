<?php

namespace Mirasvit\Example\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Loader extends Template
{
    protected $_template = "loader.phtml";

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}