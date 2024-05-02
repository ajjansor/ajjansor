<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASYADA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="topdiv">
        <a href="about.php"><img src="img/logo.png" alt="" class="logo"></a>
  
  
          <div class="topnavdiv">
              <a href="Index.php"><button class="homebtn">HOME</button></a>
            </div>
  
            <div class="topnavdiv">
                <a href="tourist_spot.php"><button class="homebtn">TOURIST SPOTS</button></a>
            </div>

            <div class="topnavdiv">
                <a href="room.php"><button class="homebtn">ROOM FOR RENT</button></a>
            </div>

            <div class="topnavdiv">
                <a href="aboutphp"><button class="homebtn">ABOUT</button></a>
            </div>
  
  
            <div class="topnavdiv">
              <button class="drpbtn">MORE</button>
              <div class="topnavdiv-content">
                <a href="events.php">EVENTS</a>
                <a href="hotline.php">HOTLINES</a>
                <a href="donate.php">DONATE</a>
              </div>
            </div>
      </div>

      <div class="container">
		<div class="box">
			<h4 class="display-4 text-center">List of Existing Appointment</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
				    <th scope="col">Place</th>
            <th scope="col">Persons</th>
			      <th scope="col">Update/Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['email']; ?></td>
				  <td><?php echo $rows['place']; ?></td>
          <td><?php echo $rows['persons']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="room.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>





</body>
</html>