<?php

namespace VaxLtd\MireIntegration\Model\Api;

use Magento\Framework\DataObject;
use Magento\Sales\Model\Order\Address;
use VaxLtd\MireIntegration\Api\ResponseItemInterface;

/**
 * Class ResponseItem
 */
class ResponseItem extends DataObject implements ResponseItemInterface
{
    /**
     * @return int
     */
    public function getId(): int | null
    {
        return $this->_getData(self::DATA_ID);
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static
    {
        return $this->setData(self::DATA_ID, $id);
    }

    /**
     * @return string | null
     */
    public function getDob(): string | null {
        return $this->_getData(self::DATA_DOB);
    }

    /**
     * @param string $dob
     * @return $this
     */
    public function setDob(string|null $dob): static{
        return $this->setData(self::DATA_DOB, $dob);
    }

    /**
     * @return string
     */
    public function getEmail(): string| null{
        return $this->_getData(self::DATA_EMAIL);
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string|null $email): static{
        return $this->setData(self::DATA_EMAIL, $email);
    }

    /**
     * @return string
     */
    public function getFirstName(): string| null{
        return $this->_getData(self::DATA_FIRSTNAME);
    }

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstName(string|null $firstname): static{
        return $this->setData(self::DATA_FIRSTNAME, $firstname);
    }

    /**
     * @return string
     */
    public function getLastName(): string| null{
        return $this->_getData(self::DATA_LASTNAME);
    }

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastName(string|null $lastname): static{
        return $this->setData(self::DATA_LASTNAME, $lastname);
    }

    /**
     * @return string
     */
    public function getMiddleName(): string| null{
        return $this->_getData(self::DATA_MIDDLENAME);
    }

    /**
     * @param string $middlename
     * @return $this
     */
    public function setMiddleName(string|null $middlename): static{
        return $this->setData(self::DATA_MIDDLENAME, $middlename);
    }

    /**
     * @return string
     */
    public function getSuffix(): string| null{
        return $this->_getData(self::DATA_SUFFIX);
    }

    /**
     * @param string $suffix
     * @return $this
     */
    public function setSuffix(string|null $suffix): static{
        return $this->setData(self::DATA_SUFFIX, $suffix);
    }

    /**
     * @return string
     */
    public function getPrefix(): string| null{
        return $this->_getData(self::DATA_PREFIX);
    }

    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string|null $prefix): static{
        return $this->setData(self::DATA_PREFIX, $prefix);
    }

    /**
     * @return array | null
     */
    public function getShippingAddress(): array| null{
        return $this->_getData(self::DATA_SHIPPING_ADDRESS);
    }

    /**
     * @param Address|null $address
     * @return $this
     */
    public function setShippingAddress(Address|null $address): static{
        return $this->setData(self::DATA_SHIPPING_ADDRESS, $address->getData());
    }

    /**
     * @return array | null
     */
    public function getBillingAddress(): array| null{
        return $this->_getData(self::DATA_BILLING_ADDRESS);
    }

    /**
     * @param Address | null $address
     * @return $this
     */
    public function setBillingAddress(Address|null $address): static{
        return $this->setData(self::DATA_BILLING_ADDRESS, $address->getData());
    }

    /**
     * @return array | null
     */
    public function getItems(): array| null{
        return $this->_getData(self::DATA_ITEMS);
    }

    /**
     * @param array | null $items
     * @return $this
     */
    public function setItems(array|null $items): static{
        return $this->setData(self::DATA_ITEMS, $items);
    }
}
