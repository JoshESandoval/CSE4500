<?php
  $json_file = file_get_contents('my_data.json');
  $json_data = json_decode($json_file,true);

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
?>
