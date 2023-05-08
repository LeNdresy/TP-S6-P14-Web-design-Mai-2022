<?php

    namespace App\Models;

//    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class IAInfoView extends Model{
        
        protected $table = 'contenu_view';
        protected $fillable = ['id','nom','datecreation','contenu','photo','idcategorie','producteur','alaune','typecategorie'];

       // use HasFactory;

    }
?>