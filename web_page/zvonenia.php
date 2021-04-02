<?php include('includes/header.php') ?>
<main>
  <div class="half">
    <h1><?php echo $ringtones['tones'] ?></h1>
    <p>Opening</p>
    <audio controls>
      <source src="sound/opening.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Apex</p>
    <audio controls>
      <source src="sound/apex.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Beacon</p>
    <audio controls>
      <source src="sound/beacon.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Bulletin</p>
    <audio controls>
      <source src="sound/bulletin.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  </div>
  <div class="half">
    <h1><?php echo $ringtones['alerts'] ?></h1>
    <p>Aurora</p>
    <audio controls>
      <source src="sound/aurora.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Bamboo</p>
    <audio controls>
      <source src="sound/bamboo.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Chord</p>
    <audio controls>
      <source src="sound/chord.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <p>Circles</p>
    <audio controls>
      <source src="sound/circles.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  </div>
</main>
<?php include('includes/footer.php') ?>
