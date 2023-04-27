<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchatProduit extends Model
{
    use HasFactory;
    protected $table = 'achat_produits';
    protected $fillable = ['libelle','quantity','prix','total_ht','total_ttc','produit_id'];
}
