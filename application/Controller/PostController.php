<?php
/**
 * Created by PhpStorm.
 * User: yaseen
 * Date: 10/17/2017
 * Time: 7:59 PM
 */

namespace Mini\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Capsule\Manager as Capsule;
use Mini\Model\Post;
use Mini\Model\User;


class PostController
{
    public function index()
    {
        $post = new Post();
        $posts = $post::get();

        require APP . 'view/_templates/header1.php';
        require APP . 'view/post/index.php';
        require APP . 'view/_templates/footer2.php';

    }

    public function add()
    {
        require APP . 'view/_templates/header1.php';
        require APP . 'view/post/add.php';
        require APP . 'view/_templates/footer2.php';

    }

    public function crt()

    {
        Capsule::schema()->create('posts', function ($table) {
            $table->increments('id');
            $table->string('post');
            $table->integer('user_id');
            $table->timestamps();
        });


    }

    public function store()
    {

        $posts = new Post();
        $posts->user_id = $_POST['user'];
        $posts->post = $_POST['post'];
        $posts->save();
        header('location: ' . URL . 'post/index');
        exit;

    }

    public function edit($id)
    {

        $post = new Post();
        // do getSong() in model/model.php
        $post = $post::find($id);
        require APP . 'view/_templates/header1.php';
        require APP . 'view/post/edit.php';
        require APP . 'view/_templates/footer2.php';
    }
    public function update($id)
    {
        $post = new Post();
        $post =$post::find($id);
        $post->user_id =$_POST['user'];
        $post->post =$_POST['post'];
        $post->update();
        header('location:'.URL.'POST/index');
        exit();
    }
    public function delete($id)
    {
        $post = new Post();
        $post =$post::find($id);
        $post->delete();
        header('location:'.URL.'POST/index');
        exit();
    }
}
