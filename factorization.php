<?php
	$err="";
    extract($_REQUEST);
	if ((! isset($n)) | ($n<1) |($n>1000000000)){ 
		$err= "Podano nieprawidłową wartość, podaj liczbę naturalną w zakresie 1-1.000.000.000";
        }

	function prime($x){
		
		for ($i=2;$i<$x;$i++){
			
			if ($x%$i==0){
			return $i;
			break;
			}
		}

        return 0;
    }

	
	
	
	function decomp ($y){
		$end = false;
		
		while ($end == false){
		if (prime($y)==0){
			echo $y . "<br>";
			$end = true;;
			}
		else{
			for ($j=2; $j<$y;$j++){
				if (prime($j)==0 && $y%$j==0){
					echo $j . " * ";
					$y=$y/$j;
					if (prime($y)==0){
						break;
						}
					$j=2;
					}
				}
			}
		}
		
	}

    if(is_numeric($n)) {

        $n = (int)$n;

    $check = prime($n);
    } else {
        $err="" .$n. " nie jest liczbą naturalną!";
    }
?>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" type="text/css" />
		<title>Rozkład</title>

	</head>
	<body>
        <section id="result">
	<h1>Rozkład na czynniki pierwsze</h1>
	<?php
	if ($err!="") {echo $err;}
	else{
		echo $n . " = " ;
		echo decomp($n);
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