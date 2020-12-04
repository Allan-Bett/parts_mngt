<?php
include("configuration.php");
$page = input($_GET['page']) or die('ERROR: Missing page ID');
$query='SELECT date, count(*),
    count(distinct IP) FROM `'.$tableName.'`
	where section=\''.$page.'\' group by date order by date';
$result=mysql_query($query) or die('Query failed: ' . mysql_error());
$fields=mysql_num_fields($result);
$num=mysql_numrows($result);
$loopCounter = 0;
$data = array();
$data2 = array();
while($ris=mysql_fetch_row($result))
    {
       $data[$ris[0]]=$ris[1];
       $data2[$ris[0]]=$ris[2];
    }

mysql_close($con);
include("phpgraphlib.php");
$graph=new PHPGraphLib(600,250);
$graph->addData($data,$data2);
$graph->setTitle("Site Statistics");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor("maroon");
$graph->setDataValues(true);
$graph->setDataValueColor("maroon");
$graph->setGoalLine(.0025);
$graph->setGoalLineColor("red");
$graph->setXValuesHorizontal(true);
$graph->createGraph();
?>
