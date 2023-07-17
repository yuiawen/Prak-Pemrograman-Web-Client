<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="main">
        <form method="post" action="index.php" id="form">
          <h2>DATA IDENTITAS</h2>
          <hr/>
          <label>Nama :</label>
          <input type="text" name="fnama" id="fnama" />

          <label>Alamat :</label>
          <input type="text" name="lalamat" id="lalamat" />

          <input type="submit" name="submit" id="submit" value="Submit">
        </form>
        <?php include "proses.php";?>
      </div>
    </div>
  </body>
</html>
