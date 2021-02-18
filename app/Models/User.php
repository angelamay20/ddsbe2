<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
// use Laravel\Lumen\Auth\Authorizable;

//Library in creating model under lumen
class User extends Model{

        
    //name of the database table
    protected $table= "tbluser";

    protected $primaryKey = 'id';

    //the column of the db table
    protected $fillable =[
        'username','password'
    ];

    //prevent lumen to set created_at and updated_at
    public $timestamps= false;

    protected $hidden =[
        'password',
    ];
}
?>