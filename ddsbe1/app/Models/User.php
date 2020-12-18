<?php

   
    namespace App\Models; 

    // library to create Model under lumen
    use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        // The code below will not require the field create_at and update_at
        
        // name of table
         protected $table = 'tbluser';
        // column sa table
         protected $fillable = [
            'username', 'password','jobid'

         ];

        public $timestamps = false;
        protected $hidden = [ 'password',];
    }