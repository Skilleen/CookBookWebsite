<!--Scott Killen's Code. October 15, 2014. Assignment 3-->
<html>
<head>
<!--Main Headings-->
<center><h1>Recipe Book for CISC 282</h1>
<h2><img src="./cookie.jpg"></h2>
</center>
</head>
<body>
<!--Linking css-->
<link rel="stylesheet" type="text/css" href="CSSfolder/recipebookstyle.css"/>
<!--PHP code to read the file and sort it. It then prints the sorted arrays.-->
<center><?php
$read = file ('classrecipes.txt', FILE_IGNORE_NEW_LINES);
$total = count($read);

$sorted=array();
foreach ($read as $page){
	$line = (explode('|', $page));
	$sort[$line[2]][] = "<a href=\"$line[3]\">$line[1]</a>"; 
}
$Color = "olive";
foreach ($sort as $first => $second) {
	echo '<div style="font-size: 40px !important;">'.$first. "<br>".'</div>';
	foreach ($second as $item) {
	print $item. "<br>";
}
}
?></center>
</body>
</html>