<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller
{


    public function action_index()
    {
        $posts = ORM::factory('Post')->find_all();
        /*		$this->response->body($posts[0]->body);*/

        $view = View::factory('blog/index')
            ->bind('posts', $posts);

        $this->response->body($view);
    }

    public function action_new()
    {
        if ($_POST) {

            try {

                $post = ORM::factory('Post');
                $post->author = $_POST['author'];
                $post->body = $_POST['body'];
                $post->save();
                $this->redirect('blog/index');

            } catch (ORM_Validation_Exception $e) {

                $errors = $e->errors('model');

            }
        }

        /*Kohana::$log->add(Log::INFO, print_r($errors, true));*/

        $view = View::factory('blog/new')->bind('errors', $errors);
        $this->response->body($view);
    }

    public function action_food(){

    // Get a Sqlite Cache instance
    $mycache = Cache::instance('memcached');

    // Create some data
    $data = array('foo' => 'bar', 'apples' => 'pear', 'BDFL' => 'Shadowhand');

    // Save the data to cache, with an id of test_id and a lifetime of 10 minutes
    $mycache->set('test_id', $data, 600);

    // Retrieve the data from cache
    $retrieved_data = $mycache->get('test_id');
   print_r($retrieved_data);

    // Remove the cache item
  //  $mycache->delete('test_id');

    // Clear the cache of all stored items
//    $mycache->delete_all();
    }




} // End Welcome
