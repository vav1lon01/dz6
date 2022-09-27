<?php
namespace Dz\Models;

use Dz\Models\Post\Post;
use  Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = 'categories';
    public function post()
    {
        return $this->hasMany(Post::class);

    }
}
