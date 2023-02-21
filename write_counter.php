<?php
  $count = intval(file_get_contents("/home/augmentedhci/data/counter.txt"));
  $count++;
  file_put_contents("/home/augmentedhci/data/counter.txt", $count);
?>
