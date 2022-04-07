<?php
    if($_GET['message'] = 'nologin')
    {
        echo "Anda harus login terlebih dahulu<br>";
    }
    elseif($_GET['message'] ='logout')
    {
        echo "Anda berhasil logout";
    }
?>

    <form method="post" action="simpan-data.php">
        <p>nama lengkap<br>
        <input type="text" name="nama" required>
        </p>

        <p>username<br>:
        <input type="text" name="username" required>
        </p>

        <p>alamat<br>
        <textarea name="alamat"></textarea>
        </p>

        <p>jenis kelamin<br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan<br>
        </p>

        <p>hobi<br>
        <input type="checkbox" name="hobi1" value="membaca"> membaca<br>
        <input type="checkbox" name="hobi2" value="bernyanyi"> bernyanyi<br>
        <input type="checkbox" name="hobi3" value="olahraga"> olahraga<br>
        
        <p>pekerjaan<br>
        <select>
            <option value="PNS">PNS</option>
            <option value="swasta">swasta</option>
            <option value="wiraswasta">wiraswasta</option>
        </select>
        </p>

        <p>Password<br>:
        <input type="password" name="password" required>
        </p>

        <input type="submit" value="simpan">
    </form>



