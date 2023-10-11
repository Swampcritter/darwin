<?php

error_reporting(E_ALL ^ E_NOTICE);

include("dbconn.inc");

$project = "SELECT * FROM darwin";
$result = mysql_query($project, $db) or die(mysql_error(). '<br>' . $project);

echo "<HTML>\n";
echo "<HEAD><TITLE>DARWIN: Dynamic Asset Form</TITLE></HEAD>\n";
echo "<BODY>\n";
echo "<h1><B>DARWIN</B></h1>\n";
echo "<I>Data Asset Resource Web Interface</I><BR><BR>\n";

echo "<font color=red>As projects are added/removed/updated to the database, listing is automatically updated.<BR><BR>\n";


echo "<table border=1 cellspacing=2 width=45%>";
echo "<tr><td width=35%>Project Name:</td>";

echo "<td>";
echo "<form method=\"post\" action=\"results.php\">";
echo "<select name=\"acronym\" SIZE=1>";

while (list($col1, $col2) = mysql_fetch_row($result) ) {
	$project_name = $col1;
	$project_acro = strtoupper($col2);
        echo "<option value=$project_acro> $project_name";
}
echo "</select>";
echo "</td></tr>";
echo "<tr><td></td>";
echo "<td>";
echo "<input type=\"submit\" Name=\"Submit\" VALUE=\"Retrieve Data\">";
echo "<input type=\"reset\" Name=\"Reset\" VALUE=\"Reset Query\">";
echo "</td></tr>";
echo "</form>";
echo "</td></tr>";
echo "</table>";

echo "<BR><BR>";

echo "<table border=1 cellspacing=2 width=45%>";

$project = "SELECT * FROM darwin";
$result = mysql_query($project, $db) or die(mysql_error(). '<br>' . $project);

echo "<tr><td width=35%>Project Acronym:</td>";

echo "<td>";
echo "<form method=\"post\" action=\"results.php\">";
echo "<select name=\"acronym\" SIZE=1>";

while (list($col1, $col2) = mysql_fetch_row($result) ) {
	$project_acro = strtoupper($col2);
        echo "<option value=$project_acro> $project_acro";
}
echo "</select>";
echo "</td></tr>";
echo "<tr><td></td>";
echo "<td>";
echo "<input type=\"submit\" Name=\"Submit\" VALUE=\"Retrieve Data\">";
echo "<input type=\"reset\" Name=\"Reset\" VALUE=\"Reset Query\">";
echo "</td></tr>";
echo "</form>";
echo "</td></tr>";
echo "</table>";

echo "<BR><BR>\n";

echo "</BODY>\n";
echo "</HTML>\n";


?>

