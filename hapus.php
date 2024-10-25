<?php
require ' function.php';

$id = $_GET["id"];

if( hapus($id) > 0){
    if ( tambah($_POST) > 0){
        echo "data berhasil di hapus";
     }else{
        echo "data gagal dihapus";
     }
}

?>