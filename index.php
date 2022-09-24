<div>
<?php
include_once('connect.php');
$res=pg_query($Connect,'select * from public.student');
   while($row=pg_fetch_array($res,MYSQLI_ASSOC)){
    ?>
    <p>this is <?php echo($row['name']) ?> a/an<?php echo($row['class'])?></p>
    <?php
}
?>
</div>