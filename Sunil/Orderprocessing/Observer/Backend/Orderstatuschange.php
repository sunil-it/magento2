<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Sunil\Orderprocessing\Observer\Backend;

use \Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;

class Orderstatuschange implements ObserverInterface
{

    /**
     * Execute observer
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        //Your observer code
    }
}

