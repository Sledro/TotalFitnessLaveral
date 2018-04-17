<?php
if($_POST)
{
//Old query
$sql_rees=
mysql_query("select * from test_user_data where fname like '%$q%' or lname like '%$q%' order by uid LIMIT 5");
//New query updated 04-02-2014
$sql_res=mysql_query("select * from test_user_data where (fname like '%$q%' or lname like '%$q%') OR (CONCAT(fname,' ',lname) like '%$q%') order by uid LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['fname'];
$lname=$row['lname'];
$img=$row['img'];
$country=$row['country'];
$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';
$final_fname = str_ireplace($q, $re_fname, $fname);
$final_lname = str_ireplace($q, $re_lname, $lname);

?>
<div class="display_box" align="left">
<img src="user_img/
<?php echo $img; ?>" />
<?php echo $final_fname; ?>&nbsp;
<?php echo $final_lname; ?><br/>
<?php echo $country; ?>
</div>
<?php
}
}
else
{}
?>