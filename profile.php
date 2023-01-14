<?php
	include_once "header.php";
?>

<section>
    <div class="container">
      <div class="profile-card">
        <img src="images/profile.jpg" alt="Profile picture">
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