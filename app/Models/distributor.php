<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kota',
        'provinsi',
        'kontak',
        'email'
    ];
}