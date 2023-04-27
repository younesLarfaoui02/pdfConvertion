<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $fillable = ['nom_produit','tva','prix_achat_HT','prix_achat_TTC',
                          'prix_vente_HT','prix_vente_TTC','designation','category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
