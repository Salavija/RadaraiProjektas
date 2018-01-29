<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Radar;


class Driver extends Model
{
    protected $table = 'drivers';
    protected $fillable = ['name', 'city', 'deleted_at'];
    protected $primaryKey ='driverId';

	public function radar()
	{
		return $this->hasMany(Radar::class, 'driver_id', 'driverId');
	}
}
