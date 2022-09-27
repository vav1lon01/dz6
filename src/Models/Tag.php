<?php
namespace Dz\Models\Tag;

use Dz\Models\Post\Post;
use  Illuminate\Database\Eloquent\Model;
class Tag extends Model
{
    protected $table = 'tags';
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}