<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Sunil\Orderprocessing\Model;

class ProcessOrderManagement implements \Sunil\Orderprocessing\Api\ProcessOrderManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function postProcessOrder($param)
    {
        return 'hello api POST return the $param ' . $param;
    }
}

