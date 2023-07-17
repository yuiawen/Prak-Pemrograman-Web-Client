<?php
if(isset($_POST['fnama']))
{
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nohp = $_POST['nohp'];
    $tgl_lahir = $_POST['tgl_lahir'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Nomor HP : ".$nohp."<br/>Tanggal Lahir : ".$tgl_lahir;
}
//---------------------------------------------------------------------//
if(isset($_GET['fnama']))
{
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $nohp = $_GET['nohp'];
    $tgl_lahir = $_GET['tgl_lahir'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/>Nomor HP : ".$nohp."<br/>Tanggal Lahir : ".$tgl_lahir;
}
