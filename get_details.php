<?php
require_once "db.php";

echo $name=$_POST['name'];
exit;
$result=mysqli_query($conn,"select * from search where Name LIKE '{$_POST['name']}%' LIMIT 1  ");

echo "<table border='1' >
<tr>
<td align=center> <b>Market Cap</b></td>
";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>


