<?php
  include('includes/header.php');
?>
  <main>
    <div class="half">
      <h2><?php echo $contact['links'] ?></h2>
      <br>
      <br>
      <p><?php echo $contact['apple'] ?></p>
      <a class="odkaz" href="https://www.apple.com">www.apple.com</a>
      <br>
      <br>
      <p><?php echo $contact['gsm'] ?></p>
      <a class="odkaz" href="https://www.gsmarena.com/apple_iphone_6s-7242.php">www.gsmarena.com</a>
      <br>
      <br>
      <p><?php echo $contact['shops'] ?></p>
      <p>16 GB <a class="odkaz" href="https://mobilne-telefony.heureka.sk/apple-iphone-6s-16gb/">www.heureka.sk</a></p>
      <p>32 GB <a class="odkaz" href="https://mobilne-telefony.heureka.sk/apple-iphone-6s-32gb/">www.heureka.sk</a></p>
      <p>64 GB <a class="odkaz" href="https://mobilne-telefony.heureka.sk/apple-iphone-6s-64gb/">www.heureka.sk</a></p>
      <p>128 GB <a class="odkaz" href="https://mobilne-telefony.heureka.sk/apple-iphone-6s-128gb/">www.heureka.sk</a></p>
    </div>
    <div class="half">
      <h2><?php echo $contact['contact_me'] ?></h2>
      <br><br>
	    <p><strong>E-mail</strong></p>
      <p>blahovic.adam@gmail.com</p>
      <p>blahovic.adam@icloud.com</p>
      <br>
      <p><strong><?php echo $contact['number'] ?></strong></p>
      <p>+421 911 157 ***</p>
    </div>
  </main>
<?php include('includes/footer.php') ?>
