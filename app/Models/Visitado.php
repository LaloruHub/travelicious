<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitado extends Model
{
    use HasFactory;

    protected $table = 'visitados';
    protected $primaryKey = 'ID';
    protected $fillable = ['NOM', 'WEB', 'LOC', 'HOT_APAR', 'PRE', 'DIN_GASTADO', 'IMG', 'NOTES', 'VAL'];
}
