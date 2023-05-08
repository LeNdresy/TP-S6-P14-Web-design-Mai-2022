<?php

    namespace App\Models;

//    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class IAInfo extends Model{
        
        protected $table = 'iainfo';
        protected $fillable = ['id','nom','datecreation','contenu','photo','idcategorie','producteur','alaune'];
        public $timestamps = false;

       // use HasFactory;

    }
?>