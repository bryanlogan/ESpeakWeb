<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>TTS</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">

function sendTTS()
{
	var tones = $("#tones").is(":checked");
	var text = $("#text").val();


	var data = 
		{
			tones: (tones ? 1 : 0),
			text: text
		}
	jQuery.post("tts.php", data, ttsSuccess);

}

function ttsSuccess(data, textStatus, jqXHR)
{
	$("#resultDiv > pre").text(data);
}

</script>

<style type="text/css">
	body
	{
		background-color: #fff;
		color: #000;
		font-family: arial, helvetica, sans-serif;
	}
	div.border
	{
		border: 1px solid #ccc;
		margin-top: 15px;
		padding: 4px;
		background-color: #eee;
		display: inline-block;
		width: 300px;
	}

	div
	{
		margin-bottom: 5px;
	}

</style>

</head>

<div>
	<input type="checkbox" id="tones"/> <label for='tones'>Play Tones?</label>
</div>
<div>
	<label for='text'>Text: </label> <input type="text" id="text">
</div>

<div>
	<button onclick='sendTTS();'>Send</button>
</div>

<div id="resultDiv" class="border">
	<pre>
	</pre>
</div>

</body>
</html>
