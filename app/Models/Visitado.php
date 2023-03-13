<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitado extends Model
{
    use HasFactory;

    protected $table = 'destinos';
    protected $primaryKey = 'ID';
    protected $fillable = ['NOM', 'WEB', 'HOT_APAR','IMG','FEC_PREV','NOTES'];
}
