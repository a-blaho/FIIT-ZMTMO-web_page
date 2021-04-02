<?php
  include('includes/header.php');
  if(isset($_POST['previous']))
    $_SESSION['image']--;
  if(isset($_POST['next']))
    $_SESSION['image']++;
  if($_SESSION['image']<1)
      $_SESSION['image']=10;
  if($_SESSION['image']>10)
      $_SESSION['image']=1;
  if($_SESSION['image']>=1 && $_SESSION['image']<=3)
  {
    $width = 140.5;
    $ext = '.jpg';
  }
  if($_SESSION['image']>=4 && $_SESSION['image']<=5)
  {
    $width = 140.5;
    $ext='.gif';
  }
  if($_SESSION['image']>=6 && $_SESSION['image']<=8)
  {
    $width = 444.5;
    $ext = '.jpg';
  }
  if($_SESSION['image']>=1 && $_SESSION['image']<=8)
  {
      $formatbeg = '<img style="margin-left: calc(50% - '.$width .'px)" class="galeria" src="img/';
      $formatend = '" alt="">';
  }
  if($_SESSION['image']>=9 && $_SESSION['image']<=10)
  {
    if($_SESSION['image']==9)
      $width = 444.5;
    if($_SESSION['image']==10)
      $width = 140.5;
    $formatbeg = '<video style="margin-left: calc(50% - '.$width.'px)" height="500" controls><source src="img/';
    $formatend = '" type="video/mp4"></video>';
    $ext='.mp4';
  }
  echo "<br><br><br>";
  echo $formatbeg.$_SESSION['image'].$ext .$formatend;
?>
<p style="text-align:center"><?php echo $gallery[$_SESSION['image']] ?></p>
<form style="margin-left:calc(50% - 26px)" method="post">
  <input type="submit" name="previous" value="<">
  <input type="submit" name="next" value=">">
</form>
<?php include('includes/footer.php') ?>
