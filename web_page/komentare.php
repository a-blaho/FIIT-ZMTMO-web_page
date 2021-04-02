<?php include('includes/lang.php'); ?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Komentare</title>
    </head>
    <body>
      <main style="margin-bottom:30px">
      <?php
        $file=fopen("comments.txt","r");
        $empty=0;
        do
        {
          $name=fgets($file);
          $date=fgets($file);
          $content = fgets($file);
          if($date==NULL)
          {
            if($empty==0)
              if($_SESSION['lang'] == "sk")
                echo '<p style="text-align:center">Zatiaľ neboli pridané žiadne komentáre</p>';
              else if($_SESSION['lang'] == "en")
                echo '<p style="text-align:center">There are no comments yet</p>';
            break;
          }
      ?>
      <div style="background-color:white; margin:10px 100px">
      <?php
        echo "<strong>". $name."</strong>";
        echo '<span style="font-size:80%">'. $date.'</span> <br> <br>';
        echo $content;
      ?>
      </div>
      <?php
        $empty++;
        }while($name!=NULL);
        fclose($file);
      ?>
    </main>
    </body>
  </html>
