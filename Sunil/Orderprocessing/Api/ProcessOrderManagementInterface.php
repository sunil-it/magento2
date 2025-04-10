<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Sunil\Orderprocessing\Api;

interface ProcessOrderManagementInterface
{

    /**
     * POST for ProcessOrder api
     * @param string $param
     * @return string
     */
    public function postProcessOrder($param);
}

