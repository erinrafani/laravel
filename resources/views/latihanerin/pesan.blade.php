 <?php if ($makanan && $minuman && $cemilan != null) {
 return "Anda memesan Makanan = $makanan <br>
 Anda memesan Minuman = $minuman <br>
 Anda memesan Cemilan = $cemilan";
 } elseif ($makanan && $minuman != null) {
 return "Anda memesan Makanan = $makanan <br>
 Anda memesan Minuman = $minuman";
 } elseif ($makanan || $minuman != null) {
 return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
 } else {
 return 'Anda tidak memesan silahkan pulang';
 }
 ?>
