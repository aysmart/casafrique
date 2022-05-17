<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));

  $post->Category = $data->Category;
  $post->BlogTittle = $data->BlogTittle;
  $post->PostedBy = $data->PostedBy;
  //$post->DateOfPost = $data->DateOfPost;
  $post->ContentText = $data->ContentText;
  $post->PostBanner = $data->PostBanner;
  $post->PostTags = $data->PostTags;
  $post->FirstPrev = $data->FirstPrev;

  
// echo "I was here".$post->FirstPrev;
  // Create post
 // echo $post->create()." I was here";
  if($post->create()) {
    echo json_encode(
      array('message' => 'Post Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Post Not Created')
    );
  }

