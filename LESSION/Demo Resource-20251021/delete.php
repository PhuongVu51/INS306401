<?php
include "connection.php";

$id=$_GET["id"];
// get some information about the item to be deleted (optional)
$res = mysqli_query($link, "SELECT * FROM tablel WHERE id=$id");
$item = mysqli_fetch_array ($res);
if (isset ($_GET ["confirm"]) && $_GET ["confirm"]=="yes" ){
   $delete_query="DELETE FROM table1 WHERE id=$id";
   mysqli_query($link, $delete_query) or die(mysqli_error($link));
   header ("Location: index.php");
}

mysqli_query($link,"delete from table1 where id=$id");
header("location.index.php");
?>

<script type="text/javascript">
 window.location="index.php";
    </script>



