<?php

namespace VaxLtd\MireIntegration\Api;

/**
 * Interface RequestItemInterface
 *
 * @api
 */
interface RequestItemInterface
{
    const DATA_ID = 'id';

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): static;
}
