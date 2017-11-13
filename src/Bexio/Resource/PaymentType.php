<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class PaymentType extends Bexio {

    /**
     * Gets all the Payment Types
     *
     * @param array $params
     * @return array
     */
    public function getPaymentTypes(array $params = [])
    {
        return $this->client->get('payment_type', $params);
    }

    /**
     * Search for Payment Type
     *
     * @param array $params
     * @return mixed
     */
    public function searchPaymentType(array $params = [])
    {
        return $this->client->post('payment_type/search', $params);
    }

    /**
     * Get specific Payment Type
     *
     * @param $id
     * @return mixed
     */
    public function getPaymentType($id)
    {
        return $this->client->get('payment_type/' . $id, []);
    }



}
