<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Language extends Bexio {

    /**
     * Gets all languages
     *
     * @param array $params
     * @return array
     */
    public function getLanguages(array $params = [])
    {
        return $this->client->get('language', $params);
    }

    /**
     * Search languages
     *
     * @param array $params
     * @return array
     */
    public function searchLanguages(array $params = [])
    {
        return $this->client->post('language/search', $params);
    }

    /**
     * Get specific language
     *
     * @param $id
     * @return mixed
     */
    public function getLanguage($id)
    {
        return $this->client->get('language/' . $id, []);
    }

}
