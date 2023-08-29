<?php

namespace VaxLtd\MireIntegration\Api;

/**
 * Interface orderRepositoryInterface
 *
 * @api
 */
interface OrderRepositoryInterface
{
    /**
     * Return a list of the matched orders.
     * @param string $email
     * @return ResponseItemInterface[]
     */
    public function getList(string $email): array;

}
