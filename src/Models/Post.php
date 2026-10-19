<?php

namespace App\Models;

class Post extends Model{
    protected static $table = 'posts';

    public $id;
    public $title;
    public $body;
    public $created_at;
    public $updated_at;
}