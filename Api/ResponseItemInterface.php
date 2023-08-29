<?php

namespace VaxLtd\MireIntegration\Api;

use Magento\Sales\Model\Order\Address;


/**
 * Interface RequestItemInterface
 *
 * @api
 */
interface ResponseItemInterface
{
    const DATA_ID = 'id';
    const DATA_DOB = 'dob';
    const DATA_EMAIL = 'email';
    const DATA_FIRSTNAME = 'firstname';
    const DATA_LASTNAME = 'lastname';
    const DATA_MIDDLENAME = 'middlename';
    const DATA_PREFIX = 'prefix';
    const DATA_SUFFIX = 'suffix';

    const DATA_BILLING_ADDRESS = 'billing_address';
    const DATA_SHIPPING_ADDRESS = 'shipping_address';

    const DATA_ITEMS = 'items';



    /**
     * @return int
     */
    public function getId(): int | null;

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static;

    /**
     * @return string
     */
    public function getDob(): string | null;

    /**
     * @param string $dob
     * @return $this
     */
    public function setDob(string|null $dob): static;

    /**
     * @return string
     */
    public function getEmail(): string | null;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string|null $email): static;

    /**
     * @return string
     */
    public function getFirstName(): string | null;

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstName(string|null $firstname): static;

    /**
     * @return string
     */
    public function getLastName(): string| null;

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastName(string|null $lastname): static;

    /**
     * @return string
     */
    public function getMiddleName(): string| null;

    /**
     * @param string $middlename
     * @return $this
     */
    public function setMiddleName(string|null $middlename): static;

    /**
     * @return string
     */
    public function getSuffix(): string| null;

    /**
     * @param string $suffix
     * @return $this
     */
    public function setSuffix(string|null $suffix): static;

    /**
     * @return string
     */
    public function getPrefix(): string| null;

    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string|null $prefix): static;

    /**
     * @return array | null
     */
    public function getShippingAddress(): array| null;

    /**
     * @param Address | null $address
     * @return $this
     */
    public function setShippingAddress(Address|null $address): static;

    /**
     * @return array | null
     */
    public function getBillingAddress(): array| null;

    /**
     * @param Address | null $address
     * @return $this
     */
    public function setBillingAddress(Address|null $address): static;

    /**
     * @return array | null
     */
    public function getItems(): array| null;

    /**
     * @param array | null $items
     * @return $this
     */
    public function setItems(array|null $items): static;

}
