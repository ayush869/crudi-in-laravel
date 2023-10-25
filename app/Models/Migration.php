<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{

   protected $fillable = [
      'name',
      'username',
      'password',
      'phone',
      'email',
  ];



  protected $table = 'migration';
}