<?php

namespace App\Models;

class TagModel extends BaseModel
{
    use \App\Models\Traits\DeleteTrait;
    protected string $tableName = 'tag';
    protected array $fillble = [];

}