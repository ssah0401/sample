<?php
include('database.php');
if($_POST)
{
$q=$_POST['searchword'];
$sql_res=mysql_query("select ID,symbol,company_name from stock_data where symbol like '$q%' or company_name like '$q%' order by ID LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$ID=$row['ID'];
$company_name=$row['company_name'];
$symbol=$row['symbol'];
// $b_symbol='<b>'.$q.'</b>';
// $b_company_name='<b>'.$q.'</b>';
// $final_symbom = str_ireplace($q, $b_symbol, $symbol);
// $final_company_name= str_ireplace($q, $b_company_name, $company_name);
?>
<div class="display_box" align="left">

<span class="name"><?php echo $symbol; ?></span>&nbsp;<br/><?php echo $company_name; ?><br/>
</div>
<?php
}
}
?>