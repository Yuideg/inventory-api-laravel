<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable=[''];
    protected $hidden = ['deleted_at','created_at','updated_at'];

    protected $primaryKey = 'role_id';




}
