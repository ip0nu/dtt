<?php

namespace App\Factories;

use App\Models\TagModel;
use App\Models\FacilityTagModel;
use App\Models\LocationModel;

class FacilityFactory extends BaseFactory
{
    public function buildList(int $page, int $limit = 10): array
    {
        $rows       = $this->boundModel->getListResults($page, $limit);
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

    public function buildById(int $id)
    {
        $facility             = parent::buildById($id);
        $locationModel        = new LocationModel($this->db);
        $facility['tags']     = $this->getTagsByFacilityId($facility['id']);
        $facility['location'] = $locationModel->getById($facility['location_id']);

        return $facility;
    }

    private function getTagsByFacilityId(int $faciletyId): array
    {
        $facilityTagModel = new FacilityTagModel($this->db);
        $tagModel         = new TagModel($this->db);
        $rows             = $facilityTagModel->getListResults();
        $tags             = [];

        foreach ($rows as $row) {
            $tags[] = $tagModel->getById($row['tag_id']);
        }

        return $tags;
    }
}