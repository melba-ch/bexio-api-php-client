<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Tax extends Bexio {

    /**
     * Gets all the Taxes
     *
     * @param array $params
     * @return array
     */
    public function getTaxes(array $params = [])
    {
        return $this->client->get('tax', $params);
    }

    /**
     * Search for Taxes
     *
     * @param array $params
     * @return mixed
     */
    public function searchTax(array $params = [])
    {
        return $this->client->post('tax/search', $params);
    }

    /**
     * Get specific Tax
     *
     * @param $id
     * @return mixed
     */
    public function getTax($id)
    {
        return $this->client->get('tax/' . $id, []);
    }



}
