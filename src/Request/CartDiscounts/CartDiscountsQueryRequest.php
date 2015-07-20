<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core\Request\CartDiscounts;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\AbstractQueryRequest;
use Sphere\Core\Model\CartDiscount\CartDiscountCollection;
use Sphere\Core\Response\ApiResponseInterface;

/**
 * Class CartDiscountsQueryRequest
 * @package Sphere\Core\Request\CartDiscounts
 * @link http://dev.sphere.io/http-api-projects-cartDiscounts.html#cart-discounts-by-query
 * @method CartDiscountCollection mapResponse(ApiResponseInterface $response)
 */
class CartDiscountsQueryRequest extends AbstractQueryRequest
{
    protected $resultClass = '\Sphere\Core\Model\CartDiscount\CartDiscountCollection';

    /**
     * @param Context $context
     */
    public function __construct(Context $context = null)
    {
        parent::__construct(CartDiscountsEndpoint::endpoint(), $context);
    }

    /**
     * @param Context $context
     * @return static
     */
    public static function of(Context $context = null)
    {
        return new static($context);
    }
}