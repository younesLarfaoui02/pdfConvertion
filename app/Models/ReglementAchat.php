<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReglementAchat extends Model
{
    use HasFactory;
    protected $table = 'regelement_achats';
    protected $fillable = ['mod_reg' ,'avance',' reste' ,'status', 'produit_id'];    
}
