
<style>
	.text:nth-child(odd) {
		color: blue;
	}
	.text:nth-child(even) {
		color: red;
	}
</style>

<?php 

	$myfile = fopen(dirname(__FILE__) . "\dictionary.txt", "r") or die("Unable to open file!");
	$text = fread($myfile,filesize(dirname(__FILE__) . "\dictionary.txt"));
	fclose($myfile);

	// Matches all strings with brackets:
	preg_match_all("/\[[^\]]*\]/", $text, $matches);
	var_dump($matches[0]);

	echo '<br><br>';

	// If You want strings without brackets:
	preg_match_all("/\[([^\]]*)\]/", $text, $matches);
	var_dump($matches[1]);

	foreach($matches[1] as $match):
		echo '<br><br><span class="text">' . $match .'</span>';
	endforeach;