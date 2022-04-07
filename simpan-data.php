<?php

    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis kelamin"];
    $hobi = $_POST["hobi"];
    $pekerjaan = $_POST["pekerjaan"];
    $password = $_POST["password"];

    echo "username: ".$username."<br>";
    echo "nama: ".$nama."<br>";
    echo "alamat: ".$alamat."<br>";
    echo "jenis kelamin: ".$jenis_kelamin."<br>";
    echo "hobi: ".$hobi."<br>";
    echo "pekerjaan: ".$pekerjaan."<br>";
    echo "password: ".$password."<br>";

    if($username == 'hatiku' AND $password == 'rahasia')
    {
        session_start();// memulai session
        //melakukan assignment terhadap variabel session
        $_SESSION['username'] = $username;
        $_SESSION['jam'] = date("Y-m-d H:i:s");
        $_SESSION['isi login'] = true;

        print_r($_SESSION);

    }
    else
    {
        echo "username atau password salah";
    }
?>
    <a href="home.php"> home</a>