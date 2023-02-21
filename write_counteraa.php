<?php
  $count = intval(file_get_contents("/home/augmentedhci/data/counteraa.txt"));
  $count++;
  file_put_contents("/home/augmentedhci/data/counteraa.txt", $count);
?>
