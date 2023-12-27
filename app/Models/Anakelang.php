<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Anakelang extends Model
{
    protected $table = 'anakelangs';
    protected $fillable = [];
    use HasFactory;

    public function age()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->age;
    }
}
