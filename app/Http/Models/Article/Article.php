<?php namespace Models\Article;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    const TABLE_NAME = 'posts';
    protected $table = self::TABLE_NAME;

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
