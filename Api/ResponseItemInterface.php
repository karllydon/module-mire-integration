<?php

namespace VaxLtd\MireIntegration\Api;

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
    CONST DATA_PREFIX = 'prefix';
    CONST DATA_SUFFIX = 'suffix';


    /**
     * @return int
     */
    public function getId(): int;

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
    public function setDob(string $dob): static;

    /**
     * @return string
     */
    public function getEmail(): string | null;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): static;

    /**
     * @return string
     */
    public function getFirstName(): string | null;

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstName(string $firstname): static;

    /**
     * @return string
     */
    public function getLastName(): string| null;

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastName(string $lastname): static;

    /**
     * @return string
     */
    public function getMiddleName(): string| null;

    /**
     * @param string $middlename
     * @return $this
     */
    public function setMiddleName(string $middlename): static;

    /**
     * @return string
     */
    public function getSuffix(): string| null;

    /**
     * @param string $suffix
     * @return $this
     */
    public function setSuffix(string $suffix): static;

    /**
     * @return string
     */
    public function getPrefix(): string| null;

    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string $prefix): static;
}
