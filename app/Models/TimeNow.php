<?php

namespace App;

use Carbon\Carbon

class TimeNow extends Model
{
    
public function CurrentTime()
{
	return Carbon::now();

}



}
