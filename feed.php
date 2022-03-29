<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "bhimadev");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "img/".basename($image);

  	$sql = "INSERT INTO agenthonouring (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM agenthonouring");

//*************************************************************
  if (isset($_POST['upload2'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "img/".basename($image);

  	$sql = "INSERT INTO bookdist (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result2 = mysqli_query($db, "SELECT * FROM bookdist");
//********************************************************************
if (isset($_POST['upload3'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  // image file directory
  $target = "img/".basename($image);

  $sql = "INSERT INTO meeting (image, image_text) VALUES ('$image', '$image_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result3 = mysqli_query($db, "SELECT * FROM meeting");
//********************************************************************
if (isset($_POST['upload4'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  // image file directory
  $target = "img/".basename($image);

  $sql = "INSERT INTO mysore (image, image_text) VALUES ('$image', '$image_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result4 = mysqli_query($db, "SELECT * FROM mysore");
//********************************************************************
if (isset($_POST['upload5'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  // image file directory
  $target = "img/".basename($image);

  $sql = "INSERT INTO lakhnavaram (image, image_text) VALUES ('$image', '$image_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result5 = mysqli_query($db, "SELECT * FROM lakhnavaram");
//********************************************************************
if (isset($_POST['upload6'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  // image file directory
  $target = "img/".basename($image);

  $sql = "INSERT INTO honouring (image, image_text) VALUES ('$image', '$image_text')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result6 = mysqli_query($db, "SELECT * FROM honouring");
//********************************************************************
if (isset($_POST['upload7'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  // image file directory
  $target = "img/".basename($image);

  $sql = "INSERT INTO agents (image, name) VALUES ('$image', '$image_text ')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}
$result7 = mysqli_query($db, "SELECT * FROM agents");
//********************************************************************
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <!-- Required meta tags always come first -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
   <link rel="stylesheet" href="css/styles.css">

<title>Image Upload</title>
<style type="text/css">

   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }

   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }

   img{
   	float: left;
   	margin: 5px;
   	width: 175px;
   	height: 140px;
   }


</style>
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
         <span class="navbar-toggler-icon"></span>
       </button>
<!--      <a class="navbar-brand mr-auto" href="#"><img src="img/logoweb.png" height="30" width="41"></a>-->
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><span class="navbar-text">BhimaDev</span></li>

        </ul>

        <span class="navbar-text">
          <a id="loginButton" role="button">
            <span class="fa fa-sign-in"></span>signout
          </a>
        </span>

      </div>
    </div>
  </nav>


  <div class="row row-content">
    <div class="col-md-4">
     <div class="card bg-light">
      <div class="card-body bg-light">
      <h4>agents</h4>
      <?php
        while ($row = mysqli_fetch_array($result7)) {
      echo "<div id='img_div'>";
        echo "<img src='img/".$row['image']."' >";
        echo "<p>".$row['name']."</p>";
      echo "</div>";
      }
     ?>
    <form method="POST" action="feed.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div>
      <input type="file" name="image">
      </div>
    <div>
      <textarea
        id="text"
        cols="35"
        rows="4"
        name="image_text"
        placeholder="Say something about this image..."></textarea>
    </div>
    <div>
      <button type="submit" name="upload7">POST</button>
    </div>
  </form>

 </div>
 </div>
  </div>
</div>
  <div class="row row-content">

    <div class="col-md-4">
     <div class="card bg-light">
      <div class="card-body bg-light">
      <h4>My Honouring</h4>
      <?php
        while ($row = mysqli_fetch_array($result6)) {
      echo "<div id='img_div'>";
        echo "<img src='img/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
      }
     ?>
    <form method="POST" action="feed.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div>
      <input type="file" name="image">
      </div>
    <div>
      <textarea
        id="text"
        cols="35"
        rows="4"
        name="image_text"
        placeholder="Say something about this image..."></textarea>
    </div>
    <div>
      <button type="submit" name="upload6">POST</button>
    </div>
  </form>

 </div>
 </div>
 </div>


    <div class="col-md-4">
     <div class="card bg-light">
      <div class="card-body bg-light">
      <h4>agents honouring</h4>
      <?php
        while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='img/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
      }
     ?>
    <form method="POST" action="feed.php" enctype="multipart/form-data">
    	<input type="hidden" name="size" value="1000000">
     	<div>
  	  <input type="file" name="image">
    	</div>
  	<div>
      <textarea
      	id="text"
      	cols="35"
      	rows="4"
      	name="image_text"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>

</div>
</div>
</div>


  <div class="col-md-4">
<div class="card bg-light">
<div class="card-body bg-light">
  <h4>book</h4>
<?php
  while ($row = mysqli_fetch_array($result2)) {
    echo "<div id='img_div'>";
      echo "<img src='img/".$row['image']."' >";
      echo "<p>".$row['image_text']."</p>";
    echo "</div>";
  }
?>
<form method="POST" action="feed.php" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
  <div>
    <input type="file" name="image">
  </div>
  <div>
    <textarea
      id="text"
      cols="35"
      rows="4"
      name="image_text"
      placeholder="Say something about this image..."></textarea>
  </div>
  <div>
    <button type="submit" name="upload2">POST</button>
  </div>
</form>

</div>
</div>
</div>

<div class="col-md-4">
 <div class="card bg-light">
  <div class="card-body bg-light">
  <h4>meeting</h4>
  <?php
    while ($row = mysqli_fetch_array($result3)) {
  echo "<div id='img_div'>";
    echo "<img src='img/".$row['image']."' >";
    echo "<p>".$row['image_text']."</p>";
  echo "</div>";
  }
 ?>
<form method="POST" action="feed.php" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
  <div>
  <input type="file" name="image">
  </div>
<div>
  <textarea
    id="text"
    cols="35"
    rows="4"
    name="image_text"
    placeholder="Say something about this image..."></textarea>
</div>
<div>
  <button type="submit" name="upload3">POST</button>
</div>
</form>

</div>
</div>
</div>

<div class="col-md-4">
 <div class="card bg-light">
  <div class="card-body bg-light">
  <h4>mysore</h4>
  <?php
    while ($row = mysqli_fetch_array($result4)) {
  echo "<div id='img_div'>";
    echo "<img src='img/".$row['image']."' >";
    echo "<p>".$row['image_text']."</p>";
  echo "</div>";
  }
 ?>
<form method="POST" action="feed.php" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
  <div>
  <input type="file" name="image">
  </div>
<div>
  <textarea
    id="text"
    cols="35"
    rows="4"
    name="image_text"
    placeholder="Say something about this image..."></textarea>
</div>
<div>
  <button type="submit" name="upload4">POST</button>
</div>
</form>

</div>
</div>
</div>

<div class="col-md-4">
 <div class="card bg-light">
  <div class="card-body bg-light">
  <h4>lakhnavaram</h4>
  <?php
    while ($row = mysqli_fetch_array($result5)) {
  echo "<div id='img_div'>";
    echo "<img src='img/".$row['image']."' >";
    echo "<p>".$row['image_text']."</p>";
  echo "</div>";
  }
 ?>
<form method="POST" action="feed.php" enctype="multipart/form-data">
  <input type="hidden" name="size" value="1000000">
  <div>
  <input type="file" name="image">
  </div>
<div>
  <textarea
    id="text"
    cols="35"
    rows="4"
    name="image_text"
    placeholder="Say something about this image..."></textarea>
</div>
<div>
  <button type="submit" name="upload5">POST</button>
</div>
</form>

</div>
</div>
</div>


</div>
</body>
<script>
$(document).ready(function(){
  $('#mycarousel').carousel({interval: 2000});
    $('#carouselButton').click(function(){
      if($('#carouselButton').children('span').hasClass('fa-pause')){
        $('#mycarousel').carousel('pause');
        $('#carouselButton').children('span').removeClass('fa-pause');
        $('#carouselButton').children('span').addClass('fa-play');

      }
      else { if($('#carouselButton').children('span').hasClass('fa-play')){
        $('#mycarousel').carousel('cycle');
        $('#carouselButton').children('span').removeClass('fa-play');
        $('#carouselButton').children('span').addClass('fa-pause');

      }

      }
    });
  });
</script>
</html>
