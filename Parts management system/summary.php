<?php
    $connection= mysqli_connect("localhost","root","","parts_management");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<?php include("configuration.php"); ?>

<script language="Javascript"
    src="<?php echo $base_url;?>count.php?page=<?php echo $_REQUEST['section'];?>">
</script>
<?php
echo "<br>";

echo '<img src="'.$base_url.'graph.php?page='.$_REQUEST['section'].'" />';

?>
