<?php
	$err="";
	extract($_REQUEST);
	if ((! isset($n)) | ($n<4) |($n>45)){ 
		$n=10;
		$err= "Podano nieprawidłową wartość, n=10";
		}
	$n = (int)$n;

	
	function lucasnumbers ($x){
		
		if ($x == 0) return 2;
		if ($x == 1) return 1;
		
		return lucasnumbers($x -1) + lucasnumbers($x-2);

	}
	
	$lucas = lucasnumbers($n);
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" type="text/css" />
		<title>Liczby Lucasa</title>

	</head>
	<body>
        <section id="result">
	<h1> Liczby Lucasa </h1>
	<?php
	if ($err!="") echo $err;
	?>
	<p><?php print( "liczby Lucasa dla n=$n <br><br>") ?> </p>
	<table>
	<tr>
	<th>n</th><th>wartość</th>
	</tr>
	<?php
	for ($i=1; $i<=$n;$i++)
		echo "<tr> <td> $i </td> <td>" . lucasnumbers($i) . "</td> </tr>";
	?>
	</table>
	<a href="index.html">
        <input
        type="button"
        class="button"
        value="Powrót"
        />
    </a>

    </section>
	</body>
</html>