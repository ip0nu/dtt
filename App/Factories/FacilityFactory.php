<?php

namespace App\Factories;

use App\Models\TagModel;
use App\Models\FacilityTagModel;
use App\Models\LocationModel;
use App\Plugins\Http\Exceptions;

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
     * @return mixed
     */
    public function buildById(int $id): mixed
    {
        if($result = parent::buildById($id)) {
            $locationModel        = new LocationModel($this->db);
            $result['tags']     = $this->getTagsByFacilityId($result['id']);
            $result['location'] = $locationModel->getById($result['location_id']);
        }

        return $result;
    }

    /**
     * BaseFactory method deletes an item by its id
     * @param int $id the id of an item that need to be outputted.
     * @return bool
     */
    public function delete(int $id): bool
    {
        if(!$this->boundModel->getById($id)){
            return false;
        }

        $facilityTagModel = new FacilityTagModel($this->db);
        $tagModel = new TagModel($this->db);
        $facilityTags = $facilityTagModel->getByFaciletyid($id);

        foreach ($facilityTags AS $facilityTag){
           $tagModel->delete($facilityTag['tag_id']);
        }

        return $this->boundModel->delete($id);
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