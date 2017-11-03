<?php

namespace Bexio\Resource;

use Bexio\Bexio;

class Position extends Bexio
{

    protected $parentId = null;
    protected $parentResource = null;

    /**
     * Set the desired order for the position scope
     *
     * @param \stdClass|integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->setParentId($order);
        $this->setParentResource('kb_offer');
        return $this;
    }

    /**
     * Set the desired invoice for the position scope
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
     * Set the desired estimate for the position scope
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
     * Set de default resource. Can be kb_offer|kb_invoice|kb_estimate
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
     * Gets all the default positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getDefaultPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_custom", $params);
    }

    /**
     * Search for default positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchDefaultPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_custom/search", $params);
    }

    /**
     * Get specific default position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getDefaultPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_custom/$id", []);
    }

    /**
     * Add new default position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createDefaultPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_custom", $params);
    }

    /**
     * Gets all the item positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getItemPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_article", $params);
    }

    /**
     * Search for item positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchItemPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_article/search", $params);
    }

    /**
     * Get specific item position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getItemPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_article/$id", []);
    }

    /**
     * Add new item position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createItemPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_article", $params);
    }

    /**
     * Gets all the text positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getTextPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_text", $params);
    }

    /**
     * Search for text positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchTextPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_text/search", $params);
    }

    /**
     * Get specific text position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getTextPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_text/$id", []);
    }

    /**
     * Add new text position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createTextPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_text", $params);
    }

    /**
     * Gets all the sub positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getSubPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_subposition", $params);
    }

    /**
     * Search for sub positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchSubPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_subposition/search", $params);
    }

    /**
     * Get specific sub position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getSubPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_subposition/$id", []);
    }

    /**
     * Add new sub position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createSubPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_subposition", $params);
    }

    /**
     * Gets all the subtotal positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getSubtotalPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_subtotal", $params);
    }

    /**
     * Search for subtotal positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchSubtotalPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_subtotal/search", $params);
    }

    /**
     * Get specific subtotal position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getSubtotalPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_subtotal/$id", []);
    }

    /**
     * Add new subtotal position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createSubtotalPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_subtotal", $params);
    }

    /**
     * Gets all the pagebreak Positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getPagebreakPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_pagebreak", $params);
    }

    /**
     * Search for pagebreak Positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchPagebreakPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_pagebreak/search", $params);
    }

    /**
     * Get specific pagebreak Position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getPagebreakPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_pagebreak/$id", []);
    }

    /**
     * Add new pagebreak Position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createPagebreakPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_pagebreak", $params);
    }

    /**
     * Gets all the discount positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @return array
     */
    public function getDiscountPositions(array $params = [])
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_discount", $params);
    }

    /**
     * Search for discount positions
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function searchDiscountPositions(array $params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_discount/search", $params);
    }

    /**
     * Get specific discount position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param $id
     * @return mixed
     */
    public function getDiscountPosition($id)
    {
        return $this->client->get("{$this->parentResource}/{$this->parentId}/kb_position_discount/$id", []);
    }

    /**
     * Add new discount position
     * You first need to set the default resource order|invoice|estimate id|object
     *
     * @param array $params
     * @return mixed
     */
    public function createDiscountPosition($params = [])
    {
        return $this->client->post("{$this->parentResource}/{$this->parentId}/kb_position_discount", $params);
    }

}
