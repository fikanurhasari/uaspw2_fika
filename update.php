<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);
$sql = "update tabelbuku set " .
        "  id='" . $data->id . "'," .
       "  judul_buku='" . $data->judul_buku . "'," .
       "  penulis='" . $data->penulis . "', " .
       "  penerbit='" . $data->penerbit . "' " .
       " where id='" . $data->id . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>