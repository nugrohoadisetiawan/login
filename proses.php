   <?php
    echo "Nama Lengkap: "
    if (isset($_POST['nama'])){
        echo $_POST['nama'];
        echo "<br>";
    }
    echo "tempat lahir: "
    if (isset($_POST['tempat '])){
        echo $_POST['tempat '];
        echo "<br>";
    }
    echo "tanggal lahir: "
    if (isset($_POST['tanggal '])){
        echo $_POST['tanggal '];
        echo "<br>";
    }
    echo "jenis kelamin: "
    if (isset($_POST['jk '])){
        echo $_POST['jk '];
        echo "<br>";
    }
    echo "Alamat: "
    if (isset($_POST['Alamat'])){
        echo $_POST['Alamat '];
        echo "<br>";
    }
    echo "Agama: "
    if (isset($_POST['agama'])){
        echo $_POST['agama'];
        echo "<br>";
    }
    ?>