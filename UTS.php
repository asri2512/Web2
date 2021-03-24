<?php
date_default_timezone_set('Asia/Jakarta');
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fileWrite = fopen('./data.txt', 'w');
    $dataPost = [
      "wilayah" => $_POST['wilayah'],
      "positif" => $_POST['positif'],
      "dirawat" => $_POST['dirawat'],
      "sembuh" => $_POST['sembuh'],
      "meninggal" => $_POST['meninggal'],
      "operator_name" => $_POST['operator_name'],
      "operator_nim" => $_POST['operator_nim'],
    ];

    fwrite($fileWrite, json_encode($dataPost));
    fclose($fileWrite);
  }
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <div>
    <h2>Data Pasien Virus Covid-19</h2>
    <form action="#" method="POST">
    <table>
      <tbody>
      <tr>
        <td> Wilayah </td>
        <td>:</td>
        <td>
          <select name="wilayah" id="">
            <option value="DKI Jakarta"> DKI Jakarta</option>
            <option value="Jawa Barat"> Jawa Barat </option>
            <option value="Banten"> Banten </option>
            <option value="Jawa Tengah"> Jawa Tengah </option>
          </select>
        </td>
      </tr>
      <tr>
        <td> Jumlah positif </td>
        <td>:</td>
        <td><input type="text" name="positif"></td>
      </tr>
      <tr>
        <td> Jumlah Dirawat </td>
        <td>:</td>
        <td><input type="text" name="dirawat"></td>
      </tr>
      <tr>
        <td> Jumlah Sembuh </td>
        <td>:</td>
        <td><input type="text" name="sembuh"></td>
      </tr>
      <tr>
        <td> Jumlah Meninggal </td>
        <td>:</td>
        <td><input type="text" name="meninggal"></td>
      </tr>
      <tr>
        <td> Operator </td>
        <td>:</td>
        <td><input type="text" name="operator_name"></td>
      </tr>
      <tr>
        <td> NIM </td>
        <td>:</td>
        <td><input type="text" name="operator_nim"></td>
      </tr>
      <tr>
        <td colspan="3">
        <button type="submit"> Submit </button>
        </td>
      </tr>
      </tbody>
    </table>
    </form>

    <?php
      $file = fopen('./data.txt', 'r') or die ('gagal membuka file!');
      $data = json_decode(fread($file, filesize('./data.txt')));
      fclose($file);
    ?>
    <div style="text-align: center">
      <p style="text-align: center">
        Data Pemantauan Covid 19 wilayah <?= $data->wilayah; ?>
      </p>
      <p style="text-align: center">
        Per <?= date('d F Y'); ?> <?= date('H:i:s'); ?>
      </p>
      <p style="text-align: center">
        Operator: <?= $data->operator_name; ?> / <?=  $data->operator_nim; ?>
      </p>
    </div>
    <table width="100%" style="padding: 0 30px;">
      <tbody>
        <tr>
          <td style="border: 1px solid gray;">Positif</td>
          <td style="border: 1px solid gray;">Dirawat</td>
          <td style="border: 1px solid gray;">Sembuh</td>
          <td style="border: 1px solid gray;">Meninggal</td>
        </tr>
        <tr>
          <td style="border: 1px solid gray;"><?= number_format($data->positif, 0, '.', '.'); ?></td>
          <td style="border: 1px solid gray;"><?= number_format($data->dirawat, 0, '.', '.'); ?></td>
          <td style="border: 1px solid gray;"><?= number_format($data->sembuh, 0, '.', '.'); ?></td>
          <td style="border: 1px solid gray;"><?= number_format($data->meninggal, 0, '.', '.'); ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
