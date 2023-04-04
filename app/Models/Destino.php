<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $table = 'destinos';
    protected $primaryKey = 'ID';
    protected $fillable = ['NOM', 'WEB', 'HOT_APAR', 'PRE', 'DIAS_PREV', 'IMG', 'FEC_PREV', 'NOTES'];
}
