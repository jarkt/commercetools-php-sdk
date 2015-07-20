<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 27.01.15, 18:22
 */

namespace Sphere\Core\Model\Cart;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Model\Common\Reference;

/**
 * Class CartReference
 * @package Sphere\Core\Model\Cart
 * @link http://dev.sphere.io/http-api-types.html#reference
 * @method string getTypeId()
 * @method CartReference setTypeId(string $typeId = null)
 * @method string getId()
 * @method CartReference setId(string $id = null)
 * @method Cart getObj()
 * @method CartReference setObj(Cart $obj = null)
 */
class CartReference extends Reference
{
    const TYPE_CART = 'cart';

    public function getFields()
    {
        $fields = parent::getFields();
        $fields[static::OBJ] = [static::TYPE => '\Sphere\Core\Model\Cart\Cart'];

        return $fields;
    }

    /**
     * @param $id
     * @param Context|callable $context
     * @return CartReference
     */
    public static function ofId($id, $context = null)
    {
        return static::ofTypeAndId(static::TYPE_CART, $id, $context);
    }
}