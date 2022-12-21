<?php
$conn = mysqli_connect("localhost","root","","perpus");

function query($query)
{
    global $conn;
    $results = mysqli_query($conn,$query);
    $datas = [];
    while( $data = mysqli_fetch_assoc($results) )
    {
        $datas[] = $data;
    }
    return $datas;
}

function regist($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    // cek apakah ada 2 username yang sama
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) )
    {
        echo "
            <script>
                alert('username yang dipilih sudah terdaftar');
            </script>
        ";
        return false;
    }

    //cek konfirmasi password
    if( $password !== $password2)
    {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

    // tambahkan data user ke database
    mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
