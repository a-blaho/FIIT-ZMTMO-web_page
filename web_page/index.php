<?php
include('includes/header.php');
 ?>
  <main>
    <div class="third">
      <img src="img/rozmery.jpg" alt="rozmery iPhone 6s" style=" width: 500px; height: 300px">
      <img src="img/zadok.jpg" alt="zadok iPhone 6s" style="width: 500px; height: 300px">
    </div>
    <div class="third" style="margin-top:150px">
      <table>
          <?php echo $specs['index_table'] ?>
      </table>
    </div>
    <div class="third" style="">
      <img src="<?php echo $specs['img'] ?>" alt="porty Iphone 6s" style="width: 500px; height: 300px">
      <p><?php echo $specs['functions']?></p>
    </div>
</main>
 <?php include('includes/footer.php') ?>
