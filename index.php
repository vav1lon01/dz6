<?php
require_once 'vendor/autoload.php';
require_once 'config/database.php';
require_once 'src/Models/Category.php';
require_once 'src/Models/Post.php';
require_once 'src/Models/Tag.php';
require_once 'src/Models/Post_tag.php';



$category = new \Dz\Models\Category();
$post = new \Dz\Models\Post\Post();
$tag = new \Dz\Models\Tag\Tag();
$post_tag = new \Dz\Models\Post_tag();
// 1. Створити 5 категорій (insert)

//for ($index = 1; $index < 6; $index+= 1){
//    $category = new \Dz\Models\Category();
//    $category->id = $index;
//    $category->title = "category_title$index";
//    $category->slug = "category_slug$index";
//    $category->save();
//    echo $index.PHP_EOL;
//}

//2. Змінити 1 категорію (update)

//$category = \Dz\Models\Category::find(1);
//$category->title = "hi";
//$category->slug = "hi";
//$category->save();

//3. Видалити 1 категорію (delete).

//$category = \Dz\Models\Category::find(1);
//$category->delete();

//4. Создать 10 постов, прикрепив произвольную категорию.

//for ($index = 1; $index < 11; $index++){
//    $post = new \Dz\Models\Post\Post();
//    $post->id = "$index";
//    $post->title = "post_title$index";
//    $post->slug = "post_slug$index";
//    $post->body = "post_body$index";
//    $category= \Dz\Models\Category::all();
//    $array_id = [];
//    foreach ($category as $item){
//        $array_id[] = $item->id;
//    }
//    $post->category_id = $array_id[rand(0,count($array_id) - 1)];
//    $post->save();
//}
//5. Обновить 1 пост, заменив поля + категорию.

//$post = \Dz\Models\Post\Post::find(1);
//$post->title = "hi";
//$post->slug = "hi";
//$post->body = "hi";
//$category= \Dz\Models\Category::all();
//$array_id = [];
//foreach ($category as $item){
//    $array_id[] = $item->id;
//}
//$post->category_id = $array_id[rand(0,count($array_id) - 1)];
//$post->save();

//6. Удалить пост.

//$post = \Dz\Models\Post\Post::find(1);
//$post->delete();

//7. Создать 10 тегов
//
//for ($index = 1; $index < 11; $index++) {
//    $tag = new \Dz\Models\Tag\Tag();
//    $tag->id = "$index";
//    $tag->title = "tag_title$index";
//    $tag->slug = "tag_slug$index";
//    $tag->save();
//}

//8. Каждому уже сохранившемуся посту прикрепить по 3 случайных тега.

$post = \Dz\Models\Post\Post::all();
$array_post_id = [];
foreach ($post as $item){
    $array_post_id[] = $item->id;

}
$tag = \Dz\Models\Tag\Tag::all();
$array_tag_id = [];
foreach ($tag as $item){
    $array_tag_id[] = $item->id;
}
foreach ($array_post_id as $id_post){
    for ($index = 0; $index < 3; $index++){
        $post_tag = new \Dz\Models\Post_tag();
        $post_tag->post_id = $id_post;
        $post_tag->tag_id = $array_tag_id[rand(0,count($array_tag_id) - 1)];
        $post_tag->save();
        }
}

//$post = \Dz\Models\Post\Post::all();
//foreach ($post as $item){
//    echo $item->id.' '.$item->title.'<br>';
//    foreach ($item->tags as $tag){
//        echo $tag->title.'<br>';
//    }
//}