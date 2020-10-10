<?php include_once('../database/connection.php'); ?>
<?php
   $query = "SELECT * FROM post limit 4";
   mysql_select_db($database_name, $consult);
   $result = mysql_query($query, $consult);
   $row = mysql_fetch_assoc($result);
?>
<?php do { ?>
<a href="post.php?post=<?php echo $row['p_id'] ?> " class="list-group-item list-group-item-action">
    <?php echo $row['p_title'] ?>
</a>
<?php }while($row = mysql_fetch_assoc($result)); ?>