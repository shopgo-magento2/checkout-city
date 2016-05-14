<?php
/**
 * Copyright © 2016 ShopGo. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ShopGo\CheckoutCity\Api\Quote\Data;

/**
 * Interface EstimateAddressInterface
 * @api
 */
interface EstimateAddressInterface extends \Magento\Quote\Api\Data\EstimateAddressInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const KEY_CITY = 'city';

    /**#@-*/

    /**
     * Get city
     *
     * @return string
     */
    public function getCity();

    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city);
}
