<?php

namespace App\Repositories;

use App\Models\BusinessDetail;
use InfyOm\Generator\Common\BaseRepository;

class BusinessDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BusinessDetail::class;
    }
}
