<?php namespace Models\System;

use Illuminate\Database\Eloquent\Model;

class System extends Model {

    const TABLE_NAME = 'sys_meta';
    protected $table = self::TABLE_NAME;


    protected $fillable = ['id', 'email', 'password'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];



    // Relationships

}
