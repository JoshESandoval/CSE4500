<?php
  $json_file = file_get_contents('my_data.json');
  $json_data = json_decode($json_file,true);
?>

<!DOCTYPE html>
  <head>
    <title>My Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div class="left-nav">
      <nav id="navbar-example3" class="navbar vertival-center flex-column center">
        <a class="nav-link" href="#about">About</a>
    </div>
    
    <div id="about">  
      <h1 ><?php echo $json_data['first-name']; echo ' '; echo $json_data['last-name']; ?></h1>
      <span> <?php echo $json_data['address']; ?></span>
      <span> <?php echo $json_data['phone'];   ?></span>
    </div>
    <?php
      foreach($json_data['experience'] AS $experience){?>
        <div class = "d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class = "flex-grow-1">
            <h3 class = "mb-0"><?php echo $experience['title']; ?></h3>
            <div class = "subheading mb-3"><?php echo $experience['employer']; ?></div>
            <p><?php echo $experience['description']; ?></p>
          </div>
          <div class = "flex-shrink-0">
            <span class = "text-primary"><?php echo $experience['period']; ?></span>
          </div>
        </div> 
      <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
