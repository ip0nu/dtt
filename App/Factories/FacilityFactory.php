<?php

namespace App\Factories;

use App\Models\FacilityModel;

class FacilityFactory extends BaseFactory
{

    public function buildList(int $page): array
    {
        $rows       = $this->boundModel->getListResults($page);
        $facilities = array_walk($rows, function ($value) {
            $value['tags']      = $this->getTagsById($value['id']);
            $value['locations'] = $this->getLocationById($value['id']);

            return $value;
        });

        return $facilities;
    }

    public function getTotalRowCount(): array
    {
        return $this->boundModel->getTotalRowCount();
    }


}