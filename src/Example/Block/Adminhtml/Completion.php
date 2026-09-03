<?php

namespace Mirasvit\Example\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Completion extends Template
{
    protected $_template = "completion.phtml";

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}