<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Blameable;

class Ruang extends Model
{
    use HasFactory, Blameable;

    protected $guarded = ['id'];
    protected $table = 'ruang';

    public function created_by(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updated_by(){
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
