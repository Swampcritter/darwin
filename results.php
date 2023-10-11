<?php
error_reporting(E_ALL ^ E_NOTICE);

$title = "DARWIN";

include("header.inc");
include("dbconn.inc");

$acronym = $_POST['acronym'];
$acronym = trim($acronym);
$acronym = strtoupper($acronym);

$project = "SELECT * FROM darwin WHERE proj_acronym = '$acronym'";
$result = mysql_query($project, $db) or die(mysql_error(). '<br>' . $project);

echo "<blockquote><blockquote><blockquote><blockquote>\n";
echo "<table border=2 align=center WIDTH=65%>\n";
 
while (list($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10,
	$col11, $col12, $col13, $col14, $col15, $col16, $col17, $col18,	$col19, $col20, 
	$col21, $col22, $col23, $col24, $col25, $col26, $col27, $col28, $col29, $col30,
	$col31, $col32, $col33, $col34, $col35, $col36, $col37, $col38, $col39, $col40,
	$col41, $col42, $col43, $col44) = mysql_fetch_row($result) ) {

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=orange><B>Project Breakdown</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Name:</B></td><td align=left>$col1</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Acronym:</B></td><td align=left>$col2</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Description:</B></td><td align=left>$col3</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Status:</B></td><td align=left>$col4</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Implement Date:</B></td><td align=left>$col5</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Project Data Department:</B></td><td align=left>$col6</td></tr>\n\n";

  echo "<tr><th ALIGN=left  WIDTH=30% bgcolor=cyan><B>Contact Information</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vice President:</B></td><td align=left>$col7</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Director:</B></td><td align=left>$col8</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Technical Manager:</B></td><td align=left>$col9</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Support Manager:</B></td><td align=left>$col10</td></tr>\n\n";

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=#00ff00><B>Hardware Setup</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Mainframe:</B></td><td align=left>$col11</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Mid-Range:</B></td><td align=left>$col12</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Desktop:</B></td><td align=left>$col13</td></tr>\n";

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=magenta><B>Applications/Software</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Programming Languages:</B></td><td align=left>$col14</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Databases:</B></td><td align=left>$col15</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Middleware:</B></td><td align=left>$col16</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Web Services:</B></td><td align=left>$col17</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Misc Tools:</B></td><td align=left>$col18</td></tr>\n";
}

  echo "</table>\n";
  echo "<table border=2 cellpadding=2 WIDTH=65%>\n\n";

$project = "SELECT * FROM darwin WHERE proj_acronym = '$acronym'";
$result = mysql_query($project, $db) or die(mysql_error(). '<br>' . $project);

while (list($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10,
	$col11, $col12, $col13, $col14, $col15, $col16, $col17, $col18,	$col19, $col20, 
	$col21, $col22, $col23, $col24, $col25, $col26, $col27, $col28, $col29, $col30,
	$col31, $col32, $col33, $col34, $col35, $col36, $col37, $col38, $col39, $col40,
	$col41, $col42, $col43, $col44) = mysql_fetch_row($result) ) {

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=green><B>Application Interfaces</B></th></tr>\n";
  echo "<tr><td ALIGN=center WIDTH=25%><B>Inbound</B></td>\n";
  echo "<td ALIGN=center WIDTH=25%><B>Outbound</B></td>\n";
  echo "<td ALIGN=center WIDTH=25%><B>Middleware</B></td>\n";
  echo "<td ALIGN=center WIDTH=25%><B>Real-Time/Batch</B></td>\n";
  echo "</tr>\n";
  echo "<td align=center>$col19</td><td align=center>$col20</td><td align=center>$col21</td><td align=center>$col22</td></tr>\n";
}

  echo "</table>\n";
  echo "<table border=2 align=center WIDTH=65%>\n\n";

$project = "SELECT * FROM darwin WHERE proj_acronym = '$acronym'";
$result = mysql_query($project, $db) or die(mysql_error(). '<br>' . $project);

while (list($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10,
	$col11, $col12, $col13, $col14, $col15, $col16, $col17, $col18,	$col19, $col20, 
	$col21, $col22, $col23, $col24, $col25, $col26, $col27, $col28, $col29, $col30,
	$col31, $col32, $col33, $col34) = mysql_fetch_row($result) ) {

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=#c0c0c0><B>Hardware Vendors</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Name:</B></td><td align=left>$col23</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Address:</B></td><td align=left>$col24</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor City:</B></td><td align=left>$col25</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor State:</B></td><td align=left>$col26</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Zip Code:</B></td><td align=left>$col27</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Phone Number:</B></td><td align=left>$col28</td></tr>\n";

  echo "<tr><th ALIGN=left WIDTH=30% bgcolor=#c0c0c0><B>Software Vendors</B></th></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Name:</B></td><td align=left>$col29</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Address:</B></td><td align=left>$col30</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor City:</B></td><td align=left>$col31</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor State:</B></td><td align=left>$col32</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Zip Code:</B></td><td align=left>$col33</td></tr>\n";
  echo "<tr><td ALIGN=right WIDTH=30%><B>Vendor Phone Number:</B></td><td align=left>$col34</td></tr>\n";
}

echo "</table>\n";
echo "</blockquote></blockquote></blockquote></blockquote>\n\n";

include("footer.inc");

?>
