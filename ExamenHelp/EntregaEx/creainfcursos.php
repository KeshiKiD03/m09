<?php
if(isset($_POST["isbn"]))
{
  //Variables de POST definides
 
 
 
        //Podem mostrar tot el contingut de POST a mode de debug
        $var = "";
 
        foreach($_POST as $key => $value)
                {
                        $var .= "POST[" . $key . "]= " . $value . "<br>";
                        //$var = $var . "POST[" . $key . "]= " . $value . "<br>";
 
                }
                        echo($var);
        }
  else
  {
    //Sense dades del formulari
  }
  
//CONNECTEM AL SERVIDOR  

$passwdBD = "keshi";
$userBD = "keshi";
$servidor = "localhost";
$nomBD = "CURSOS";

$connexio = mysqli_connect($servidor,$userBD,$passwdBD);

if (!$connexio)
    {
        exit('No es pot connectar:'. mysqli_error());
    }

	if(!mysqli_select_db($connexio,$nomBD)){

           exit("Error al connectar amb la base de dades". mysqli_error());
	}

        //En primer lloc comprovem que no hi ha cap usuario amb el mateix nom
        $consulta = sprintf('select * from infcursos where nom="%s" ', $_POST["nom"]);
        echo $consulta;

        //Fem la consulta
        if ($result = mysqli_query($connexio, $consulta)  )
        {
                //Mirem quants registres ha retornat la consulta
                $afectades = mysqli_num_rows($result);

                //Existeix un usuari amb aquest nom
                if($afectades!=0)
                {
                        //Usuari existent
                        printf('<div class="login">Ja existeix un usuari amb aquest nom = %s </div>',  $_POST["nom"] );
                }


                else
                {
			//No existeix cap usuari, el creem
			//Crear quan no hi hagi cap usuari amb el NOM introduit

                  //echo $consulta;
			                                $consulta = sprintf('insert into infcursos (ID_CURS, DATA_INICI, DATA_FIN, TITOL_CURS, DNI_PROFESSOR) values ("%s", "%s", "%s", "%s", "%s")', $_POST["ID_CURS"], $_POST["DATA_INICI"], $_POST["DATA_FIN"], $_POST["TITOL_CURS"], $_POST["DNI_PROFESSOR"]);

                        if ($result = mysqli_query($connexio, $consulta)  )
			{
                                //Inserci?? correcta
                                printf('<div class="login">Inserci?? correcta </div>');
                        }
                        else
                        {
                                //Error a l'inserir
                                printf('<div class="login">Error inserint </div>');
                        }

    }

  }

  else
        {
                printf('<div class="login">Error al fer la consulta </div>');
        }

?>

