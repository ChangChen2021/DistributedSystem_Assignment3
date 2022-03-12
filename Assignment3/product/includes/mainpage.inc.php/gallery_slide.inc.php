<div class="slide hi-slide">
  <div class="hi-prev"></div>
  <div class="hi-next"></div>
  <ul>
    <?php	
    foreach ($parameter_slide as $information){
      //display the peopleInformation
      $id= $information['id'];
      $name= $information['name'];
      $image= $information['image'];
      $position= $information['position'];
      $degree= $information['degree'];
      $phone= $information['phone'];
      $description= $information['description'];
      $birthday= $information['birthday'];
      echo"<li>
        <div class=\"gallery-box gallery-img-$id\">
                  <a href= \"../overview/index.php?id=$id\">
                      <style type=\"text/css\">
                          .gallery-img-$id{background: linear-gradient(rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), url($image);}
                      </style>
            <div class=\"gallery-info\">
              <h3>$name</h3>
              <p>Position: $position</p>
              <p>Birthday: $birthday</p>
              <p>Degree: $degree</p>
              <p>Phone: $phone</p>
            </div>
        </a>
        </div>
      </li>";
    }
    ?>
  </ul>
</div>