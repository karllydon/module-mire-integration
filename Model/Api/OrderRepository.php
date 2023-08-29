<?php

namespace VaxLtd\MireIntegration\Model\Api;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\ResourceModel\Order\Collection;
use VaxLtd\MireIntegration\Api\OrderRepositoryInterface;
use VaxLtd\MireIntegration\Api\RequestItemInterfaceFactory;
use VaxLtd\MireIntegration\Api\ResponseItemInterface;
use VaxLtd\MireIntegration\Api\ResponseItemInterfaceFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory;



/**
 * class OrderRepository
 *
 */
class OrderRepository implements OrderRepositoryInterface
{

    protected RequestItemInterfaceFactory $_requestItemFactory;
    protected ResponseItemInterfaceFactory $_responseItemFactory;

    protected CollectionFactory $_orderCollectionFactory;


    /**
     * @param CollectionFactory $orderCollectionFactory
     * @param RequestItemInterfaceFactory $requestItemFactory
     * @param ResponseItemInterfaceFactory $responseItemFactory
     */
    public function __construct(
        CollectionFactory $orderCollectionFactory,
        RequestItemInterfaceFactory $requestItemFactory,
        ResponseItemInterfaceFactory $responseItemFactory,
    ) {
        $this->_orderCollectionFactory = $orderCollectionFactory;
        $this->_requestItemFactory = $requestItemFactory;
        $this->_responseItemFactory = $responseItemFactory;
    }



    /**
     * Return a list of the matched orders.
     * @param string $email
     * @return ResponseItemInterface[]
     */
    public function getList(string $email): array {
        $collection = $this->getOrderCollection($email);

        $result = [];
        /** @var OrderInterface $order */
        foreach ($collection->getItems() as $order) {
            $result[] = $this->getResponseItemFromOrder($order);
        }

        return $result;
    }

    /**
     * @return Collection
     */
    private function getOrderCollection($email)
    {
        $collection = $this->_orderCollectionFactory->create();
        $collection->addFieldToFilter('customer_email', ['eq'=>$email]);
        return $collection;
    }

    /**
     * @param OrderInterface $order
     * @return ResponseItemInterface
     */
    private function getResponseItemFromOrder(OrderInterface $order): ResponseItemInterface
    {
        $responseItem = $this->_responseItemFactory->create();
        $responseItem->setId($order->getId())
            ->setDob($order->getCustomerDob())
            ->setEmail($order->getCustomerEmail())
            ->setPrefix($order->getCustomerPrefix())
            ->setFirstName($order->getCustomerFirstname())
            ->setMiddleName($order->getCustomerMiddlename())
            ->setLastName($order->getCustomerLastname())
            ->setSuffix($order->getCustomerPrefix());
        return $responseItem;
    }








}


