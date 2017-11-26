<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    protected $fillable = [
        'name',
    ];

}