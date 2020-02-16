<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking_space extends Model
{   
  protected $table = 'parking_spaces';
  protected $primaryKey = 'id';
    protected $fillable = [
      'landowner_id' ,
      'admin_id' ,
      'name' ,
      'address' ,
      'longitude',
      'latitude',
      // 'image' ,
      // 'open_days'
      // 'open_from' ,
      // 'open_till' ,
      // 'open_status' ,
      'description',
      'poya',
      'bank',
      'public',
      'updated_at',
      'created_at'

    ];
}
