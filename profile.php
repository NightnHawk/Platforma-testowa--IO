<?php
	include_once "header.php";
  include_once "imgh.php";
?>

<section>
    <div class="container">
      <div class="profile-card">
        
<?php
$id = $_SESSION["userid"];
  $sql = "SELECT * FROM users WHERE users_id=$id";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row["users_id"];
      $sqlImg = "SELECT * FROM users WHERE users_id='$id'";
      $resultImg = mysqli_query($conn, $sqlImg);
      while($rowImg = mysqli_fetch_assoc($resultImg)){
          if($rowImg["users_img"] == 0){
            echo '<img src="uploads/profile' . $id . '.jpg" alt="Profile picture">';
          }else{
            echo '<img src="images/profile.jpg" alt="Profile picture">';
          }
      }
    }
  }
?>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
          <input type="file" name="pfp">
          <button type="submit" name="pfp-upload">Upload</button>
        </form>
        <h1><?php echo $_SESSION["useruid"]; ?></h1>
      </div>
    </div>
</section>

</body>
</html>