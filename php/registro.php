<?php
	include 'conexion.php';

    $nombre     = $_POST['nombre'];
    $apaterno   = $_POST['apaterno'];
    $amaterno   = $_POST['amaterno'];
    $telefono   = $_POST['telefono'];
    $correo     = $_POST['correo'];
    $pwd        = md5($_POST['pwd']);

    $varifica = varificarUsuario($correo);

    if ($varifica === false){
        $query = "
            INSERT INTO
                usuarios(
                    nombre,
                    aPaterno,
                    aMaterno,
                    telefono,
                    correo,
                    pwdUsuario
                )
            VALUES(
                '".$nombre."',
                '".$apaterno."',
                '".$amaterno."',
                '".$telefono."',
                '".$correo."',
                '".$pwd."'
            );
        ";

        if (mysqli_query($conn, $query)) {
            echo '
                <div class="alert alert-success">
                    Registrado con exito
                </div>
            ';
        }else{
            echo '
                <div class="alert alert-warning">
                    Error al registrar
                </div>
            ';
        }
    }else{
        echo '
            <div class="alert alert-warning">
                El correo ya se encuentra registrado
            </div>
        ';
    }

    function varificarUsuario($correo) {
        include 'conexion.php';
        
        $queryBusqueda = "
            SELECT
                *
            FROM
                usuarios
            WHERE
                correo = '".$correo."'
            ;
        ";

        if (mysqli_num_rows(mysqli_query($conn, $queryBusqueda)) > 0) {
            return true;
        }else{
            return false;
        }
    }
?>