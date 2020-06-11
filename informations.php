<?php
	$err="";
	extract($_REQUEST);
	
	
	$pora="";
	if (isset($spring)){
		$pora=$pora."Wiosna ";
	}
	if (isset($summer)){
		$pora=$pora."Lato ";
	}
	if (isset($autumn)){
		$pora=$pora."Jesień ";
	}
	if (isset($winter)){
		$pora=$pora."Zima";
	}
	
?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="index.css" type="text/css" />
		<title>Dane klienta</title>

	</head>
	<body>
        <section id="result">


<?php	
    echo "
    <h1>Dane klienta</h1>
	<table>
		<tr>
			<td> Imię </td>
			<td> $name </td>
		</tr>
		
		<tr>
			<td> Nazwisko </td>
			<td> $secondName </td>
		</tr>
		<tr>
			<td> Płeć </td>
			<td> $gender </td>
		</tr>
		<tr>
			<td> Data urodzenia </td>
			<td> $birthDate </td>
		</tr>
		<tr>
			<td> E-mail </td>
			<td> $email </td>
		</tr>
		<tr>
			<td> Hasło </td>
			<td> $password </td>
		</tr>
		<tr>
			<td> Ulubiony kolor </td>
			<td> $color </td>
		</tr>
		<tr>
			<td> Ulubiona liczba (1 ~ 9)</td>
			<td> $number</td>
		</tr>
		<tr>
			<td> Ulubiona pora roku </td>
			<td>
				$pora 
			</td>
		</tr>
		<tr>
			<td> Poziom zadowolenia z życia (0 ~ 100%) </td>
			<td> $happiness % </td>
		</tr>
		<tr>
			<td> Dzień kontaktu z klientem </td>
			<td> $day </td>
		</tr>
		<tr>
			<td> Dodatkowe informacje o kliencie </td>
			<td>$description</td>
		</tr>
	</table>"
    ?><a href="index.html">
    <input
    type="button"
    class="button"
    value="Powrót"
    />
</a>

    </section>
	</body>
</html>