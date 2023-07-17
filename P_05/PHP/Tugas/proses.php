<?php
if(isset($_POST['fnama']))
{
    // establish database connection
    $conn = mysqli_connect("localhost", "username", "password", "abc");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO data_identitas (nama, alamat, no_hp, tanggal_lahir) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fnama, $lalamat, $nohp, $tgl_lahir);

    // set parameters and execute statement
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nohp = $_POST['nohp'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $stmt->execute();

    // close statement and connection
    $stmt->close();
    mysqli_close($conn);

    // display success message
    echo "<span class='success'>Data berhasil disimpan ke database</span>";
}

//---------------------------------------------------------------------//

if(isset($_GET['fnama']))
{
    // establish database connection
    $conn = mysqli_connect("localhost", "username", "password", "abc");

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO data_identitas (nama, alamat, no_hp, tanggal_lahir) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fnama, $lalamat, $nohp, $tgl_lahir);

    // set parameters and execute statement
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $nohp = $_GET['nohp'];
    $tgl_lahir = $_GET['tgl_lahir'];
    $stmt->execute();

    // close statement and connection
    $stmt->close();
    mysqli_close($conn);

    // display success message
    echo "<span class='success'>Data berhasil disimpan ke database</span>";
}
?>