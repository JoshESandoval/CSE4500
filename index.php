<?php
  $json_file = file_get_contents('my_data.json');
  $json_data = json_decode($json_file,true);
  
  ?>
<h1><?php echo $json_data['first_name']; ?></h1> 
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php } ?>
