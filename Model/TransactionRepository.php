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

namespace SDM\Altapay\Model;

use Magento\Store\Model\StoreManagerInterface;
use SDM\Altapay\Api\TransactionRepositoryInterface;
use SDM\Altapay\Model\TransactionFactory;

/**
 * Class TransactionRepository
 * Service class to write module's transaction entities.
 * @package SDM\Altapay\Model
 */
class TransactionRepository implements TransactionRepositoryInterface
{
    /**
     * @var TransactionFactory
     */
    private $transactionFactory;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * TransactionRepository constructor.
     * @param TransactionFactory    $transactionFactory
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        TransactionFactory $transactionFactory,
        StoreManagerInterface $storeManager
    ) {
        $this->transactionFactory = $transactionFactory;
        $this->storeManager = $storeManager;
    }

    /**
     * It creates the entity and saves the JSON request.
     *
     * @param string $orderid
     * @param string $transactionid
     * @param string $paymentid
     * @param string $transactiondata
     * @param string $parametersdata
     */
    public function addTransactionData($orderid, $transactionid, $paymentid, $transactiondata, $parametersdata)
    {
 
        /** @var Transaction $transaction */
        $transaction = $this->transactionFactory->create();

        $transaction->setOrderid($orderid);
        $transaction->setTransactionid($transactionid);
        $transaction->setPaymentid($paymentid);
        $transaction->setTransactiondata($transactiondata);
        $transaction->setParametersdata($parametersdata);
        $transaction->getResource()->save($transaction);
    }
}
