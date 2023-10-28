<?php

namespace App\Factories;

use App\Models\TagModel;
use App\Models\FacilityTagModel;
use App\Models\LocationModel;

class FacilityFactory extends BaseFactory
{
    /**
     * Factory method builds a list of facilities
     * @param int $offset offset of the db table of where the list starts
     * @param int $limit amount of records retrieved from the db, when not given default 10
     * @return void
     */
    public function buildList(int $offset, int $limit = 10): array
    {
        $rows       = $this->boundModel->getListResults($offset, $limit);
        $facilities = [];
        if ($rows) {
            $locationModel = new LocationModel($this->db);
            foreach ($rows as $row) {
                $row['tags']     = $this->getTagsByFacilityId($row['id']);
                $row['location'] = $locationModel->getById($row['location_id']);

                $facilities[] = $row;
            }
        }

        return $facilities;
    }

    /**
     * Factory method builds a facility by its id
     * @param int $id the id of a facility that need to be outputted.
     * @return void
     */
    public function buildById(int $id)
    {
        $facility             = parent::buildById($id);
        $locationModel        = new LocationModel($this->db);
        $facility['tags']     = $this->getTagsByFacilityId($facility['id']);
        $facility['location'] = $locationModel->getById($facility['location_id']);

        return $facility;
    }

    /**
     * BaseFactory method deletes an item by its id
     * @param int $id the id of an item that need to be outputted.
     * @return void
     */
    public function delete(int $id)
    {
        $facilityTagModel = new FacilityTagModel($this->db);
        $tagModel = new TagModel($this->db);
        $facilityTags = $facilityTagModel->getByFaciletyid($id);

        foreach ($facilityTags AS $facilityTag){
           // $tagModel->delete($facilityTag['tag_id']);
        }
        return true; //$this->boundModel->delete($id);
    }

    /**
     * Factory method get the child tags from a facility by facilityId
     * @param int $faciletyId the id of a facility .
     * @return array
     */
    private function getTagsByFacilityId(int $faciletyId): array
    {
        $facilityTagModel = new FacilityTagModel($this->db);
        $tagModel         = new TagModel($this->db);
        $rows             = $facilityTagModel->getByFaciletyid($faciletyId);
        $tags             = [];

        foreach ($rows as $row) {
            $tags[] = $tagModel->getById($row['tag_id']);
        }

        return $tags;
    }
}