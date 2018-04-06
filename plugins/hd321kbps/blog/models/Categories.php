<?php namespace Hd321kbps\Blog\Models;

use Model;

/**
 * Categories Model
 */
class Categories extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'hd321kbps_blog_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
