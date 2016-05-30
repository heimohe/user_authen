
//php mysql 在浏览器输入用户名，去数据库查询。查到则显示在浏览器，查不到则显示空。
<?php
error_reporting(E_ALL || ~E_NOTICE);

$con = mysql_connect("localhost","wyl","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wyl", $con);
$nm = $_POST['username'];

$result = mysql_query("  SELECT * FROM t1 where username='".$nm."' ");

echo "<table border='1'>
<tr>
<th>username</th>
<th>password</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
			echo "<tr>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['password'] . "</td>";
			echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
