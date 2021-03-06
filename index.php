<?php
  $json_file = file_get_contents('my_data.json');
  $json_data = json_decode($json_file,true);
?>

<!DOCTYPE html>
  <head>
    <title>My Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://youli.academic.csusb.edu/css/style.css" rel="stylesheet">
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navbar-example3" style="position:relative">
    <!-- Navigation Panel -->
    <div class="left-nav" >
      <nav id="navbar-example3" class="navbar vertical-center flex-column center">
        <nav class="nav flex-column">
          <a class="nav-link" href="#about">About</a>
          <a class="nav-link" href="#education">Education</a>
          <a class="nav-link" href="#experience">Experience</a>
          <a class="nav-link" href="#github">Github</a>
        </nav>
      </nav>    
    </div>
    
    

    
    <!--Begining of Main Body -->
    <div data-bs-offset="0" tabindex="0">
      
      <!--start of about -->
      <div id="about" class="content-item">
        <div class="vertical-center">  
          <h1 ><?php echo $json_data['first-name']; echo ' '; echo $json_data['last-name']; ?></h1>
          <span> <?php echo $json_data['address']; ?></span>
          <span> <?php echo $json_data['phone'];   ?></span>
          <p>    <?php echo $json_data['intro'];   ?></p>
        </div>
      </div>
      <hr>
      
      <!--Begining of education -->
      <div id="education" class="content-item">
        <div class="vertical-center">
          <h1>Education</h1>
          <div>In progress</div>
        </div>
      </div>
      <hr>
      
      <!--Start of experience -->
      <div id="experience" class="content-item">
        <div class="vertical-center">
          <?php
          foreach($json_data['experience'] AS $experience){?>
          
            <!--Sub-heading of experience -->
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
        </div>
      </div>
      <hr>
      
      <!-- Github -->
      <div id="github" class="content-item">
        <div class = "vertical-center">
          <h1>Github Link</h1>
            <div>
              <a href="https://github.com/JoshESandoval/CSE4500/edit/main/index.php">Link to Github Repo for class</a>
          </div>  
        </div>
      </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
