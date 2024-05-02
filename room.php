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
                <a href="about.php"><button class="homebtn">ABOUT</button></a>
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
        <form action="php/create.php" 
              method="post">
                
           <h4 class="top-text">New Appointment</h4><hr><br>
           <?php if (isset($_GET['error'])) { ?>
           <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
            </div>
           <?php } ?>
           <div class="form-group">
             <label for="name">Name</label>
             <input type="name" 
                   class="form-control" 
                   id="name" 
                   name="name" 
                   value="<?php if(isset($_GET['name']))
                                   echo($_GET['name']); ?>" 
                   placeholder="Enter name">
           </div>
    
           <div class="form-group">
             <label for="email">Email</label>
             <input type="email" 
                   class="form-control" 
                   id="email" 
                   name="email" 
                   value="<?php if(isset($_GET['email']))
                                   echo($_GET['email']); ?>"
                   placeholder="Enter email">
           </div>
           
           <div class="form-group">
             <label for="place">Place</label>
             <input type="place" 
                   class="form-control" 
                   id="place" 
                   name="place" 
                   value="<?php if(isset($_GET['place']))
                                   echo($_GET['place']); ?>"
                   placeholder="Enter place">
           </div>

            
           <div class="form-group">
             <label for="persons">Persons</label>
             <input type="persons" 
                   class="form-control" 
                   id="persons" 
                   name="persons" 
                   value="<?php if(isset($_GET['place']))
                                   echo($_GET['place']); ?>"
                   placeholder="Enter place">
           </div>



           <button type="submit" 
                  class="btn btn-primary"
                  name="create">Create</button>
            <a href="read.php" class="link-primary">View</a>
          </form>
      </div>


</body>
</html>