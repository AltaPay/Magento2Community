<?php
/**
 * Altapay Module version 3.0.1 for Magento 2.x.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2018 Altapay
 * @category  payment
 * @package   altapay
 */
 
namespace SDM\Altapay\Api;

interface GatewayInterface
{
    /**
     * createRequest to altapay
     * @return void
     */
    public function createRequest();
}
