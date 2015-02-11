<html>
 <body>
<file name ="p1" action="qw.php"method="post">
<table boarder="5">
<?php
if(isset($_post["btnsub"]))
{
$en=$_post["text.nmae"];
$es=$_post["text.sal"];
$hra=$_Post["text.hra"];
$da=$_post["text.da"];
$ns=$es+$hra+$da;
echo"net salary:$ns";
}
?>
 <tr>
 <td> name:</td>
<td><input type ="text" name"txt name"/>
</td>
</tr>
<tr>
<td>
salary</td>
<td><input type =".text" name="textsal"/> </td>
</tr>
<tr>
<td>hra:</td>
<td><input type=".text" name="txthra"/></td>
</tr>
<tr>
<td>da:</td>
<td><input type=".text" name="txtda"/> </td>
</tr>
<tr>
<td>net salary</td>
<td>
<?php
if(isset($ns)) 
echo $ns;
?></td>
</tr>
<tr>
<td>
net salary</td>
<td><input type ="text"name="ns";
"txtns" value="<?php if(isset($ns))echo$ns;?>"
</tr>

</tr>
</form>
</table>
</body>
</html>
