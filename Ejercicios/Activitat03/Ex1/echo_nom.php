<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Activitat 03: Exercici 1</title>
		<style type="text/css">
			/**{ font-family:Calibri, 
                "Segoe UI", 
                "DejaVu Sans", 
                "Trebuchet MS", 
                Verdana, 
                sans-serif
            }
			.main{ margin:auto; 
                border:1px solid #3f7a82; 
                width:40%; 
                text-align:left; 
                padding:30px; 
                background:#1ab9cf
            }*/
			input[type=submit]{ background:#6ca16e; width:100%;
				padding:5px 15px; 
				background:#ccc; 
				cursor:pointer;
				font-size:16px;
			   
			}
		</style>
	</head>

<!-- 1. Escriviu un formulari de recollida de dades personals que consti de dues pàgines.
    A la primera pàgina se sol·licita el nom.
    A la segona pàgina es mostra el text introduït per l'usuari (tot i que estigui en blanc). -->

	<body bgcolor="#bed7c0">
		
	    <div class="main">

	    	<h3 align="center">El nom és: 
            <?php 
            
                echo $_POST["nom"];
            
            ?>
            </h3>
        </div>
        <br>
        <div align="center">
            <a href="solicita_nom.html">Tornar</a>
        </div>
	</body>
</html>
