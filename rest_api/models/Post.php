<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'blogpost';

    // Post Properties
    public $ID;
    public $Category;
    public $FirstPrev;
    public $BlogTittle;
    public $PostedBy;
    public $DateOfPost;
    public $ContentText;
    public $PostBanner;
    public $PostTags;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = "SELECT * FROM blogpost WHERE Category='Blog Post' ORDER BY DateOfPost DESC";

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Post
    public function read_single() {
          // Create query
          $query = "SELECT * FROM blogpost WHERE Category='Blog Post' AND ID=? ORDER BY DateOfPost DESC LIMIT 0,1";                                    

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind ID
          $stmt->bindParam(1, $this->id);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->ID = $row['ID'];
          $this->Category = $row['Category'];
          $this->PostBanner = $row['PostBanner'];
          $this->BlogTittle = $row['BlogTittle'];
          $this->PostTags = $row['PostTags'];
          $this->FirstPrev= $row['FirstPrev'];
          $this->ContentText = $row['ContentText'];
          $this->PostedBy = $row['PostedBy'];
          $this->DateOfPost = $row['DateOfPost'];      
          
    }
    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET Category = :Category, PostBanner = :PostBanner, BlogTittle = :BlogTittle, PostedBy = :PostedBy, ContentText = :ContentText,  PostTags = :PostTags, FirstPrev = :FirstPrev';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->Category = htmlspecialchars(strip_tags($this->Category));
          $this->PostBanner = htmlspecialchars(strip_tags($this->PostBanner));
          $this->BlogTittle = htmlspecialchars(strip_tags($this->BlogTittle));
          $this->PostTags = htmlspecialchars(strip_tags($this->PostTags));
          $this->FirstPrev= htmlspecialchars(strip_tags($this->FirstPrev));
          $this->ContentText = htmlspecialchars(strip_tags($this->ContentText));
          $this->PostedBy = htmlspecialchars(strip_tags($this->PostedBy));

          //echo $this->ContentText;

          // Bind data
          $stmt->bindParam(':Category', $this->Category);
          $stmt->bindParam(':PostBanner', $this->PostBanner);
          $stmt->bindParam(':BlogTittle', $this->BlogTittle);
          $stmt->bindParam(':PostTags', $this->PostTags);
          $stmt->bindParam(':FirstPrev', $this->FirstPrev);
          $stmt->bindParam(':ContentText', $this->ContentText);
          $stmt->bindParam(':PostedBy', $this->PostedBy);

        // echo $this->PostedBy;
         //Execute query
         if($stmt->execute()) {
          return true;
      }

    //  try {
      //  $stmt->execute();
     // } catch(Exception $e) {
       // echo 'Message: ' .$e->getMessage();
     // }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
          SET Category = :Category, PostBanner = :PostBanner, BlogTittle = :BlogTittle, PostedBy = :PostedBy, ContentText = :ContentText,  PostTags = :PostTags, FirstPrev = :FirstPrev
                                WHERE ID = :ID';

          // Prepare statement
          $stmt = $this->conn->prepare($query);


          // Clean data
          $this->Category = htmlspecialchars(strip_tags($this->Category));
          $this->PostBanner = htmlspecialchars(strip_tags($this->PostBanner));
          $this->BlogTittle = htmlspecialchars(strip_tags($this->BlogTittle));
          $this->PostTags = htmlspecialchars(strip_tags($this->PostTags));
          $this->FirstPrev= htmlspecialchars(strip_tags($this->FirstPrev));
          $this->ContentText = htmlspecialchars(strip_tags($this->ContentText));
          $this->PostedBy = htmlspecialchars(strip_tags($this->PostedBy));
          $this->ID = htmlspecialchars(strip_tags($this->ID));

          //echo $this->ContentText;

          // Bind data
          $stmt->bindParam(':Category', $this->Category);
          $stmt->bindParam(':PostBanner', $this->PostBanner);
          $stmt->bindParam(':BlogTittle', $this->BlogTittle);
          $stmt->bindParam(':PostTags', $this->PostTags);
          $stmt->bindParam(':FirstPrev', $this->FirstPrev);
          $stmt->bindParam(':ContentText', $this->ContentText);
          $stmt->bindParam(':PostedBy', $this->PostedBy);
          $stmt->bindParam(':ID', $this->ID);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE ID = :ID';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->ID = htmlspecialchars(strip_tags($this->ID));

          // Bind data
          $stmt->bindParam(':ID', $this->ID);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
    
  }