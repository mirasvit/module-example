<?php

namespace Mirasvit\Example\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Dialogs extends Template
{
    protected $_template = "dialogs.phtml";

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}