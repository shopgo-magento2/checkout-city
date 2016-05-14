<?php
/**
 * Copyright © 2016 ShopGo. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace ShopGo\CheckoutCity\Model\Quote;

use ShopGo\CheckoutCity\Api\Quote\Data\EstimateAddressInterface;

class EstimateAddress extends \Magento\Quote\Model\EstimateAddress implements EstimateAddressInterface
{
    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->getData(self::KEY_CITY);
    }

    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        return $this->setData(self::KEY_CITY, $city);
    }
}
