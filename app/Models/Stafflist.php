<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stafflist extends Model
{
    use HasFactory;

    protected $fillable = ["fullname","department","staff_number","station","phone","nin","state_of_residence","hmo","ref"];

}
