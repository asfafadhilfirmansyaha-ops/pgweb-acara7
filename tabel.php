<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
$jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);
?>

<table border="1">
  <tr>
    <th>kecamatan</th>
    <th>luas</th>
    <th>jumlah_penduduk</th>
  </tr>
  <?php for ($i = 0; $i < count($kecamatan); $i++): ?>
  <tr>
    <td><?php echo $kecamatan[$i]; ?></td>
    <td><?php echo $luas[$i]; ?></td>
    <td><?php echo $jumlah_penduduk[$i]; ?></td>
  </tr>
  <?php endfor; ?>
</table>