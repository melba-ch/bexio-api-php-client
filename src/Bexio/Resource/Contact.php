<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Contact extends Bexio {

    /**
     * Gets all the contacts
     *
     * @return array
     */
    public function getContacts(array $params = [])
    {
        return $this->client->get('contact', $params);
    }

    /**
     * Search for contacts
     *
     * @param array $params
     * @return mixed
     */
    public function searchContacts(array $params = [])
    {
        return $this->client->post('contact/search', $params);
    }

    /**
     * Get specific contact
     *
     * @param $id
     * @return mixed
     */
    public function getContact($id)
    {
        return $this->client->get('contact/' . $id, []);
    }

    /**
     * Add new contact
     *
     * @param array $params
     * @return mixed
     */
    public function createContact($params = [])
    {
        return $this->client->post('contact', $params);
    }


    /**
     * Add multiple contacts
     *
     * @param array $params
     * @return mixed
     */
    public function createContacts($params = [])
    {
        return $this->client->post('contact/_bulk_create', $params);
    }

    /**
     * Get relations from contacts
     *
     * @return mixed
     */
    public function getContactsRelations()
    {
        return $this->client->get('contact_relation', []);
    }

}
