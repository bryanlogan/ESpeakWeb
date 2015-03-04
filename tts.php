<?

$text = $_POST["text"];
$tones = $_POST["tones"];

$escapedText = escapeshellarg($text);

//print "tones value: $tones. ";

if($tones == 1)
{
	print "Played tones. ";
	system("play -c2 -v10 -V1 -qn synth 0.15 sine 1000 : synth 0.25 sine 2000 : synth 0.15 sine 1000 : synth 0.25 sine 2000 ");
}

if($text != null && $text != "")
{
	system("espeak -a150 -ven-us+f3 -k5 -s160 -g5 $escapedText");


	print "Played text: $text\n";
	print "Escaped text: $escapedText\n";
}

?>
