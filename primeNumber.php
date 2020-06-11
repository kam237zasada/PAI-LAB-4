<?php
	$err="";
	extract($_REQUEST);
	if ((! isset($n)) | ($n<1) |($n>1000000000)){ 
		$err= "Podano nieprawidłową wartość, podaj liczbę naturalną w zakresie 1 - 1 000 000 000";
        } else
    if (is_numeric($n) && $n > 0) {   


	
	function prime ($x){
		for ($i=2;$i<$x;$i++){
			
			if ($x%$i==0){
			return $i;
			break;
			}
		}
		
		return 0;

	}
    $n = (int)$n;

    $check = prime($n);
} else {
        $err = "" .$n. " nie jest liczbą naturalną!";
}
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" type="text/css" />
		<title>PrimeNumber</title>

	</head>
	<body>
        <section id="result">
	<h1>Liczby pierwsze</h1>
	<?php
	if ($err!="") {echo $err;}
	else{
		if ($check==0){
		echo "$n jest liczbą pierwszą";
		}
		else{
		echo "$n jest liczbą złożoną. Pierwszy dzielnik to: $check";
		}
		
	}
	?>
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