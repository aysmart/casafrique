<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get ID
  $post->id = isset($_GET['ID']) ? $_GET['ID'] : die();

  // Get post
  $post->read_single();

  // Create array
  $post_arr = array(
    'ID' => $post->ID,
    'Category' => $post->Category,
    'PostedBy' => $post->PostedBy,
    'DateOfPost' => $post->DateOfPost,
    'ContentText' => $post->ContentText,
    'PostBanner' => $post->PostBanner,
    'PostTags' => $post->PostTags,
    'FirstPrev' => $post->FirstPrev
  );

  // Make JSON
  print_r(json_encode($post_arr));