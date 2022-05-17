<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'unit',
        'price',
        'quantity'
        ];
        public function catagory(){
            return $this->belongsTo(catagory::class);

        }
       
}
