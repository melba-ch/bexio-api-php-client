<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Discount extends Bexio {

    protected $parentId = null;
    protected $parentResource = null;

    /**
     * Set the desired order for the discount scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->setParentId($order);
        $this->setParentResource('kb_order');
        return $this;
    }

    /**
     * Set the desired invoice for the discount scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setInvoice($order)
    {
        $this->setParentId($order);
        $this->setParentResource('kb_invoice');
        return $this;
    }

    /**
     * Set the desired estimate for the discount scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setEstimate($order)
    {
        $this->setParentId($order);
        $this->setParentResource('kb_estimate');
        return $this;
    }

    /**
     * @param \stdClass|integer $parent
     * @return $this
     */
    public function setParentId($parent)
    {
        if ($parent instanceof \stdClass) {
            $this->parentId = $parent->id;
            return $this;
        }
        $this->parentId = $parent;
        return $this;
    }

    /**
     * Set de default resource. Can be kb_order|kb_invoice|kb_estimate
     *
     * @param string $resource
     * @return $this
     */
    public function setParentResource($resource)
    {
        $this->parentResource = $resource;
        return $this;
    }

    /**
     * Gets all discounts
     *
     * @param array $params
     * @return array
     */
    public function getDiscounts(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_discount", $params);
    }

    /**
     * Search for discounts
     *
     * @param array $params
     * @return mixed
     */
    public function searchDiscounts(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_discount", $params);
    }

    /**
     * Get specific discount
     *
     * @param $id
     * @return mixed
     */
    public function getDiscount($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_discount/" . $id, []);
    }

    /**
     * Add new discount
     *
     * @param array $params
     * @return mixed
     */
    public function createDiscount($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_discount", $params);
    }

}
