<?php

namespace VaxLtd\MireIntegration\Model\Api;

use VaxLtd\MireIntegration\Api\RequestItemInterface;
use Magento\Framework\DataObject;

/**
 * Class RequestItem
 */
class RequestItem extends DataObject implements RequestItemInterface
{
    /**
     * @return int
     */
    public function getId(): int
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
}
