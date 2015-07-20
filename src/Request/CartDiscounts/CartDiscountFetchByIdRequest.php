<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\CartDiscounts;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\AbstractFetchByIdRequest;
use Sphere\Core\Model\CartDiscount\CartDiscount;
use Sphere\Core\Response\ApiResponseInterface;

/**
 * Class CartDiscountFetchByIdRequest
 * @package Sphere\Core\Request\CartDiscounts
 * @link http://dev.sphere.io/http-api-projects-cartDiscounts.html#cart-discount-by-id
 * @method CartDiscount mapResponse(ApiResponseInterface $response)
 */
class CartDiscountFetchByIdRequest extends AbstractFetchByIdRequest
{
    protected $resultClass = '\Sphere\Core\Model\CartDiscount\CartDiscount';

    /**
     * @param string $id
     * @param Context $context
     */
    public function __construct($id, Context $context = null)
    {
        parent::__construct(CartDiscountsEndpoint::endpoint(), $id, $context);
    }

    /**
     * @param string $id
     * @param Context $context
     * @return static
     */
    public static function ofId($id, Context $context = null)
    {
        return new static($id, $context);
    }
}