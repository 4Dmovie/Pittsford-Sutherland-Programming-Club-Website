<?php 
$db = mysqli_connect("fdb15.biz.nf","2268644_cp","sutherland2015","2268644_cp");
    $rid = $_GET['id'];
    $result = mysqli_query($db,  "SELECT filepath FROM ts WHERE id='$rid'");
    $row = mysqli_fetch_array($result);
    $l = $row['filepath'];
    if($l)
            unlink($l);
    $l = $row['code'];
    if($l)
            unlink($l);
    mysqli_query($db, "DELETE FROM ts WHERE id='$rid'") or die('Error querying database.');          
header("location: success.php");
?>