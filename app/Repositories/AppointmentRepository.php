<?php

namespace App\Repositories;

use App\Models\Appointment;
use InfyOm\Generator\Common\BaseRepository;

class AppointmentRepository extends BaseRepository
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
        return Appointment::class;
    }
}
