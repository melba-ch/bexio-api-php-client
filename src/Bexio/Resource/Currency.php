<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Currency extends Bexio {

    /**
     * Gets all the Currencies
     *
     * @param array $params
     * @return array
     */
    public function getCurrencies(array $params = [])
    {
        return $this->client->get('currency', $params);
    }

    /**
     * Search for Currencies
     *
     * @param array $params
     * @return mixed
     */
    public function searchCurrency(array $params = [])
    {
        return $this->client->post('currency/search', $params);
    }

    /**
     * Get specific Currency
     *
     * @param $id
     * @return mixed
     */
    public function getCurrency($id)
    {
        return $this->client->get('currency/' . $id, []);
    }



}
