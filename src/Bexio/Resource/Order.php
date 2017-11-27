<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Order extends Bexio {

    protected $orderId;

    /**
     * Gets all orders
     *
     * @param array $params
     * @return array
     */
    public function getOrders(array $params = [])
    {
        return $this->client->get('kb_order', $params);
    }

    /**
     * Search for orders
     *
     * @param array $params
     * @return mixed
     */
    public function searchOrders(array $params = [])
    {
        return $this->client->post('kb_order/search', $params);
    }

    /**
     * Get specific order
     *
     * @param $id
     * @return mixed
     */
    public function getOrder($id)
    {
        return $this->client->get('kb_order/' . $id, []);
    }

    /**
     * Add new order
     * 
     * @param array $params
     * @return mixed
     */
    public function createOrder($params = [])
    {
        return $this->client->post('kb_order', $params);
    }


    /**
     * Set the desired order for the repetition scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        return $this->setOrderId($order);
    }

    /**
     * Set the desired orderId for the repetition scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setOrderId($order)
    {
        if ($order instanceof \stdClass) {
            $this->orderId = $order->id;
            return $this;
        }
        $this->orderId = $order;
        return $this;
    }

    /**
     * Create a repetition an order
     *
     * @param array $params
     * @param \stdClass|integer $order
     * @return $this
     */
    public function createRepetition(array $params = [], $order = null)
    {
        if ($order instanceof \stdClass) {
            $id = $order->id;
        } else {
            $id = $order ?: $this->orderId;
        }
        return $this->client->post("kb_order/$id/repetition", $params);
    }

}
