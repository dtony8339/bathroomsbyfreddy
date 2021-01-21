<?php

require "config.inc.php";

$site_root="https://paintingbyfreddy.co.uk/";

$t = "\t";
$n = "\n";

 $sqlp = "SELECT * FROM blog WHERE site_project = 160";


GLOBAL $conn;

$assoc_result = mysqli_query($conn, $sqlp);


if (mysqli_num_rows($assoc_result) > 0) {
	$xml = '<urlset

      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"

      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"

      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9

            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

	while($accoc_row = mysqli_fetch_array($assoc_result))
	{

  $xml.= '<url>'."$n";
	$xml.= "$t".'<loc>'."https://bathroomsbyfreddy.co.uk/".str_replace("’","",str_replace("?","",str_replace("'","",str_replace(' ','-',$accoc_row['linktitle'])))).'/'.str_replace(' ','-',$accoc_row['sublink']).'</loc>'."$n";
	$xml.= "$t".'<changefreq>daily</changefreq>'."$n";
	$xml.= "$t".'<priority>1.0</priority>'."$n";
	$xml.= '</url>'."$n";

 }
$xml.= '</urlset>';

$handle = fopen('sitemap3.xml','w+');

fwrite($handle,$xml);
fclose($handle);
}
?>