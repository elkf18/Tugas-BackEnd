<?php
function printIterable(iterable $myIterable) {
  foreach($myIterable as $produk) {
    echo $produk;
  }
}

$arr = ["novel","<br>","komik", "<br>","game"];
printIterable($arr);
?>