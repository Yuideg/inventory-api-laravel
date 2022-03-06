<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customer_id';
    protected $hidden = ['deleted_at','created_at','updated_at','password'];
    protected $fillable=['first_name','last_name','username','password','address','email','phone','staff_id'];





}
