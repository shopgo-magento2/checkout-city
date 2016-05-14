<?php
/**
 * Copyright © 2016 ShopGo. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ShopGo\CheckoutCity\Model\Quote\Cart;

/**
 * @inheritDoc
 */
class CartTotalManagement extends \Magento\Quote\Model\Cart\CartTotalManagement
{
    /**
     * @param \ShopGo\CheckoutCity\Api\Quote\ShippingMethodManagementInterface $shippingMethodManagement
     * @param \Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement
     * @param \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalsRepository
     * @param \Magento\Quote\Model\Cart\TotalsAdditionalDataProcessor $dataProcessor
     */
    public function __construct(
        \ShopGo\CheckoutCity\Api\Quote\ShippingMethodManagementInterface $shippingMethodManagement,
        \Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement,
        \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalsRepository,
        \Magento\Quote\Model\Cart\TotalsAdditionalDataProcessor $dataProcessor
    ) {
        $this->shippingMethodManagement = $shippingMethodManagement;
        $this->paymentMethodManagement = $paymentMethodManagement;
        $this->cartTotalsRepository = $cartTotalsRepository;
        $this->dataProcessor = $dataProcessor;
    }
}
