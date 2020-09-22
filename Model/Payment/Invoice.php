<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Strativ\Invoice\Model\Payment;

class Invoice extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "invoice";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}

