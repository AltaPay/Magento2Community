<?php
/**
 * Altapay Module for Magento 2.x.
 *
 * Copyright © 2018 Altapay. All rights reserved.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SDM\Altapay\Model\Method;

use Magento\Payment\Model\Method\AbstractMethod;

/**
 * Class TerminalModel
 *
 * @package SDM\Altapay\Model
 */
abstract class TerminalModel extends AbstractMethod
{
    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = false;

    /**
     * Payment Method feature
     *
     * @var bool
     */
    protected $_canAuthorize = true;

    /**
     * Determines if payment type can use refund mechanism
     *
     * @var bool
     */
    protected $_canRefund = true;

    /**
     * Determines if payment type can use capture mechanism
     *
     * @var bool
     */
    protected $_canCapture = true;

    /**
     * Determines if payment type can use partial captures
     *
     * @var bool
     */
    protected $_canCapturePartial = true;

    /**
     * Determines if payment type can use partial refunds
     *
     * @var bool
     */
    protected $_canRefundInvoicePartial = true;
}
