<?php

namespace App\Repositories;

use App\Models\DentalChart;
use InfyOm\Generator\Common\BaseRepository;

class DentalChartRepository extends BaseRepository
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
        return DentalChart::class;
    }
}
