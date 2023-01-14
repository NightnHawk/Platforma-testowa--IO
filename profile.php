<?php
	include_once "header.php";
?>

<section>
    <div class="container">
      <div class="profile-card">
        <img src="images/profile.jpg" alt="Profile picture">
        <h1><?php echo $_SESSION["useruid"]; ?></h1>
      </div>
    </div>
</section>

</body>
</html>