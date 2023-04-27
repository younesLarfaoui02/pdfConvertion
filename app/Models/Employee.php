<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = ['nom','email','sex','cin','cnss','status_familiale','nb_enfants',
                            'tel','fix','adresse','ville','date_naissance','fonction','type_contrat',
                            'date_entree','date_sortie','base_salaire','heures_sup','duree_cong','nom_banque'
                            ,'rib','nom_urg','tel_urg'];
}
