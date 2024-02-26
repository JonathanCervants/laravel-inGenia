<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table ='tickets';
    protected $primaryKey = 'id';
    protected $fillable = ['title','content','precio','status','slug'];
  //  protected $guarded = ['id','estado'];
     public $timestamps = true;
}

