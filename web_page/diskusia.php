<?php include('includes/header.php')?>
<div class="half">
  <h3><?php echo $discussion['disc_head'] ?></h3>
  <form style="padding-top:80px" method="post">
    <?php echo $discussion['name'] ?><input required autocomplete="off" type="text" size="50" name="name">
    <br>
    <br>
    <?php echo $discussion['comment'] ?>
    <br>
    <textarea required style="resize:none"rows="10" cols="100"type="text" name="comment"> </textarea>
    <br>
    <input type="submit" value="<?php echo $discussion['button'] ?>" name="send">
  </form>
</div>
<div class="half">
  <iframe src="komentare.php" width="956" height="699"></iframe>
</div>
<?php
  if(!empty($_POST['name']) && !empty($_POST['comment']) && isset($_POST['send']))
  {
    file_put_contents("comments.txt",$_POST['name'].PHP_EOL,FILE_APPEND);
    file_put_contents("comments.txt",date('d.m.Y',$_SERVER['REQUEST_TIME']+3600).PHP_EOL,FILE_APPEND);
    file_put_contents("comments.txt",$_POST['comment'].PHP_EOL,FILE_APPEND);
  }
  include('includes/footer.php');
?>
