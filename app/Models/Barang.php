<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
}
class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
}
class Slider extends Model
{
    use HasFactory;
    protected $table = 'slider';
}
