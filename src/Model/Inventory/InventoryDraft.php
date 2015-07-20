<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Model\Inventory;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Common\JsonObject;
use Sphere\Core\Model\Common\DateTimeDecorator;
use Sphere\Core\Model\Channel\ChannelReference;

/**
 * Class InventoryDraft
 * @package Sphere\Core\Model\Inventory
 * @method string getSku()
 * @method InventoryDraft setSku(string $sku = null)
 * @method int getQuantityOnStock()
 * @method InventoryDraft setQuantityOnStock(int $quantityOnStock = null)
 * @method int getRestockableInDays()
 * @method InventoryDraft setRestockableInDays(int $restockableInDays = null)
 * @method DateTimeDecorator getExpectedDelivery()
 * @method InventoryDraft setExpectedDelivery(\DateTime $expectedDelivery = null)
 * @method ChannelReference getSupplyChannel()
 * @method InventoryDraft setSupplyChannel(ChannelReference $supplyChannel = null)
 */
class InventoryDraft extends JsonObject
{
    public function getFields()
    {
        return [
            'sku' => [static::TYPE => 'string'],
            'quantityOnStock' => [static::TYPE => 'int'],
            'restockableInDays' => [static::TYPE => 'int'],
            'expectedDelivery' => [
                static::TYPE => '\DateTime',
                static::DECORATOR => '\Sphere\Core\Model\Common\DateTimeDecorator'
            ],
            'supplyChannel' => [static::TYPE => '\Sphere\Core\Model\Channel\ChannelReference'],
        ];
    }

    /**
     * @param string $sku
     * @param int $quantityOnStock
     * @param Context|callable $context
     * @return InventoryDraft
     */
    public static function ofSkuAndQuantityOnStock($sku, $quantityOnStock, $context = null)
    {
        return static::of($context)->setSku($sku)->setQuantityOnStock($quantityOnStock);
    }
}