<?php
/**
 * Copyright © CM.com. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace CM\Payments\Api\Service;

use CM\Payments\Api\Model\Domain\CMOrderInterface;
use CM\Payments\Api\Model\Data\OrderInterface as CMOrder;
use CM\Payments\Client\Api\OrderDetailInterface;
use Magento\Quote\Model\Quote;

interface OrderServiceInterface
{
    /**
     * @param string $orderId
     *
     * @return CMOrderInterface
     */
    public function create(string $orderId): CMOrderInterface;

    /**
     * @param string $incrementId
     * @param Quote $quote
     *
     * @return CMOrderInterface
     */
    public function createByQuote(string $incrementId, Quote $quote): CMOrderInterface;
}
