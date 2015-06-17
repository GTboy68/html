<html>
<head>
</head>
<select name="cnt" id="">
<option value="">Select</option>
<?php
include('config.php');
$rescnt=mysql_query("select * from `groups` ORDER by name ASC");
while($row=mysql_fetch_array($rescnt)) {
?>
<option value="<?php echo $row['group_id']; ?>"><?php echo $row['name']; ?></option>

<?php } ?>
</select>
</body>
</html>