<?php
/**
  * Landofcoder
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Landofcoder.com license that is
  * available through the world-wide-web at this URL:
  * https://landofcoder.com/terms
  *
  * DISCLAIMER
  *
  * Do not edit or add to this file if you wish to upgrade this extension to newer
  * version in the future.
  *
  * @category   Landofcoder
  * @package    Lofmp_MarketplacePayment
  * @copyright  Copyright (c) 2021 Landofcoder (https://www.landofcoder.com/)
  * @license    https://landofcoder.com/terms
 */

namespace Lofmp\MarketplacePayment\Model;

/**
 * Class Razorpay
 *
 * @package Lofmp\MarketplacePayment\Model
 */
class Razorpay extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * Payment code
     *
     * @var string|bool
     */
    const CODE                  = 'marketplace_razorpay';

    /**
     * @var string
     */
    protected $_code            = self::CODE;

    /**
     * @var bool
     */
    protected $_isOffline       = true;

    /**
     * @var bool
     */
    protected $_canUseCheckout  = false;

    /**
     * @var bool
     */
    protected $_canUseInternal  = true;

    /**
     * Get pre select option from config
     *
     * @return bool|int|string
     */
    public function getDataPreSelect()
    {
        return 1;
    }

    /**
     * Get Auto Create Invoice option from config
     *
     * @return bool
     */
    public function getDataAutoCreateInvoice()
    {
        return false;
    }
}
