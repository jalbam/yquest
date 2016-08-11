<?php
    //Se configura el BBClone:
    define("_BBC_PAGE_NAME", "spanish online");
    define("_BBCLONE_DIR", "../bbclone/");
    define("COUNTER", _BBCLONE_DIR."mark_page.php");
    if (is_readable(COUNTER)) include_once(COUNTER);

/*
    Error:
           * A veces el codigo de javascript no deja escribir el "A" de "DAR" con segun que objetos (al poner DAR, objeto, A... el A no se esribe).
    Falta: 
           * Accion HABLAR y DECIR (poder decir la frase exacta o bien DECIR x donde x es una letra o numero de frase expuesta).
           * Acciones ABRIR, CERRAR.
           * Propiedades en los objetos: "activar_al_moverse", "activar_al_abrirse", "activar_al_cerrarse", "activar_al_usarse", etc. (proxima version)
           * Que haya objetos que puedan usarse/moverse, etc. infinitamente y otros solo una vez (como ahora)
           * En mover y usar y usar con: calcular si los objetos y salidas que activa el objeto al usarse estan o no activados, y si no lo estan activarlos y mostrarlos con un echo.
           * Cambiar la frase "Otra vez no, gracias." por "No hace falta" o algo parecido al USARSE. 
           * Poner links de javascript solo si soporta javascript = enabled, si no no.
           * Usar css para links y ponerlo todo mas bonito en general.
           * Activar/desactivar salidas, objetos, etc. al mirar, abrir, cerrar, usar, etc... y no solo al usarse o moverse (y diferente para cada accion).
           * Que para utilizar algo, deba estar en el inventario! no vay a ser que utilicen una llave del paisaje con una puerta (o mejor si??? pensarlo bien).
           * Poner todo en "no puedo" o todo en "no puedes", decidirse por primera o segunda persona.
           * Poner el inventario en tablas.
           * Poner variable $lugar_para_acabar_el_juego, y cuando llega ahi no mostrar objetos ni salidas. Solo la descripcion y la frase "Fin de juego" (o similar) o bien $usar_objeto_para_acabar_juego = "OBJETO" (o las dos cosas) (al final de la funcion komprobar si el objeto esta aktivado y si es asi se akabe el juego).
           * Usar la propiedad "IR" de los objetos, para poder activarlos y poder ir a ellos (o mejor quitar esto?).
           * Al usar un objeto, poder activar/desactivar la propiedad COGER de otro.
           * Algunas frases (como al activar salidas y objetos) mejor guardarlas en variables y representarlas despues de "$usar_texto" y no antes.
           * Usar un fondo (bg) en una tabla dentro del TD, donde los paisajes, con una imagen. Y poner las imagenes de los objetos encima. El problema esta en las coordenadas de posicionamiento de estos en el paisaje...
           * Usar imagenes en el inventario (de inventario/x.jpg y inventario/x_a.jpg para los activados).
           * Poner las salidas con flechas o algo asi igual que los objetos (en lugares.php poner la posicion x e y del este, del oeste, etc. de cada salida).
           * Pôder hacer que objetos activados usen su_id.jpg o su_id.gif sin el _a detras del nombre.
           * Pasar los .jpg a .gif para que ocupen menos (en paisajes mas que nada). Calcular si han ocupado menos o mas y decidirse.
           * Calcular SID para los navegadores que no reconocen o no aceptan las cookies y ponerlo en los <a href>
           * Opcion de ver mapa, con una X donde ponga: tu estas aqui. (Y si apretas click en otro lugar, que vaya alli(?))
           * Crear directorio inventario y poner imagenes
           * Doctype en index.php, ayuda.php, etc. (los ke lo precisen solo)
           * Usar meta-tags
           * Focalizar input text despues de darle a "ver mapa"
           * Cambiar include por require si asi es mas conveniente.
           * Un <HR> entre "HAS ELEGIDO blablabla" y lo que viene luego (coger la blabla, o "no puedo coger eso", etc. calcular si no va a haber frase no hacer HR)

           * Corregir faltas ortigraficas (hacha es femenino, aunque se diga el hacha, etc.). 
           * Un index "frase" en cada objeto para que al estar disponible muestre una frase. Ejemplo: "Puedes ver una llave al fondo del pasillo".
           * Al poner CON o A si no hay nada escrito o lo que hay escrito al principio no es una ACCION, decir: NO SE HA SELECCIONADO UNA ACCION TODAVIA.
           * Posicionar las imagenes de posicon absoluta de los objetos debajo del nombre de estos o encima, asi se vera korrektamente en navegadores k no soporten CSS.

    Parece ya estar:
           //* Coordenadas distintas para los objetos activados ($HTTP_SESSION_VARS["objetos"][1]["left_position_activado"] y $HTTP_SESSION_VARS["objetos"][1]["top_position_activado"])
           //* Poder poner nombres de mas de una palabra a los objetos: llave diminuta, perro hambriento, etc.
           //* Function activar (para activar objetos o salidas).
           //* Un objeto desactivado no puede utilizarse. No se puede coger si no esta activado.
           //* el poder usarse debe ser reciproco: perro puede usarse con hueso, y hueso con perro. pero no puede usarse hueso con perro ni perro con hueso si el perro ya no esta rabioso (calcular reciprocidad mutua y comprobar nombres).
           //* Distinguir entre DAR A y USAR CON. Calcular si esta animado (tiene vida) el objeto o no.
           //* Crear una $HTTP_SESSION_VARS["objetos"][x]["alternar_estado_al_activar"], para cuando se use un objeto este desaparezca si queremos del paisaje (ejemplo: gato ahuyentado al usar silbato).
           //* Usar unas variables en objetos que en lugar de activar objetos o lugares, los desactiven (desactivar_lugar_al_usar, etc. por ejemplo).
           //* Usar frase_inicial y frase_final en funcion describir_lugar
           //* Desactivar algunos objetos al utilizarse!!! como por ejemplo al dar dinero al vendedor... el dinero debe desaparecer (y hueso con perro) (probar a poner el hueso en el mismo habitakulo ke el vendedor y usarlo... tambien deberia desaparecer) -> el problema esta en ke no debe desaparecer tumba al usarse si no hueso (ke es el mismo objeto) -> ("desactivar_objeto" = "ponerse a si mismo", kuando este en el inventario borrarlo (poner a FALSE))
*/       

/*
    Programa realizado por Joan Alba Maldonado (granvino@granvino.com)
     dedicado a Yasmina Llaveria del Castillo
*/


//Se otorga a la sesion el nombre "yasminasquest":
session_name("yasminasquest");
//Se abre la sesion:
session_start("yasminasquest");

if (!isset($HTTP_GET_VARS) || isset($_GET)) { $HTTP_GET_VARS = &$_GET; }
if (!isset($HTTP_SESSION_VARS) || isset($_SESSION)) { $HTTP_SESSION_VARS = &$_SESSION; }


//Variable para indicar cual es este archivo:
$this_file = "index.php";

//Se incluye el archivo que contiene la funcion "realizar_accion":
include "procesar.php";

//Se incluye el archivo que contiene los objetos:
include "objetos.php";

//Se incluye el archivo que contiene los lugares:
include "lugares.php";

?>
<html>

    <head>
        <title>Yasmina's Quest</title>

        <!--     Programa por Juan Alba Maldonado      -->
        <!--          granvino@granvino.com            -->
        <!--  dedicado a Yasmina Llaveria del Castillo -->

        <script language="JavaScript" type="text/javascript">
        <!--
            
            function abrir_ayuda()
             {
                ventana_ayuda = window.open( 'ayuda.php<?php if (SID) { echo "?".SID; } ?>','ayudayq','scrollbars=yes,menubar=no,height=400,width=450,resizable=yes,toolbar=no,location=no,status=no');
                formulario.comando.focus();
                ventana_ayuda.focus();
             }

            function poner_texto(palabra)
             {
                
                palabra = palabra.toUpperCase();
                accion = document.formulario.comando.value.toUpperCase();
                document.formulario.comando.value = accion;
    
                longitud = accion.length;
                for (x=0;x<=longitud;x++)
                 {
                    if (accion.substring(accion.length - 1, accion.length) == ' ') { accion = accion.substring(0, accion.length - 1); document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 1); }
                    if (accion.substring(0, 1) == ' ') { accion = accion.substring(1, accion.length); document.formulario.comando.value = document.formulario.comando.value.substring(1, document.formulario.comando.value.length); }
                 }
                
                if (palabra != 'BORRAR')
                 {
                  
                    if (palabra == 'COGER' || palabra == 'USAR' || palabra == 'DAR' || palabra == 'IR' || palabra == 'MIRAR' || palabra == 'MOVER')
                     {
                        if (accion.substring(0,6) == 'COGER ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else if (accion.substring(0,5) == 'USAR ') { document.formulario.comando.value = palabra + accion.substring(4,accion.length); }
                        else if (accion.substring(0,4) == 'DAR ') { document.formulario.comando.value = palabra + accion.substring(3,accion.length); }
                        else if (accion.substring(0,3) == 'IR ') { document.formulario.comando.value = palabra + accion.substring(2,accion.length); }
                        else if (accion.substring(0,6) == 'MIRAR ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else if (accion.substring(0,6) == 'MOVER ') { document.formulario.comando.value = palabra + accion.substring(5,accion.length); }
                        else
                         {
                            if (accion == "COGER" || accion == "USAR" || accion == "DAR" || accion == "IR" || accion == "MIRAR" || accion == "MOVER") { document.formulario.comando.value = palabra; }
                            else { document.formulario.comando.value = palabra + ' ' + document.formulario.comando.value; }
                         }
                        
                        if (palabra != 'USAR' && document.formulario.comando.value.indexOf(' CON ', 0) > 0) { document.formulario.comando.value = document.formulario.comando.value.replace(document.formulario.comando.value, document.formulario.comando.value.substring(0, document.formulario.comando.value.indexOf(' CON ', 0))) + ' '; }
                        if (palabra != 'USAR' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 4, document.formulario.comando.value.length) == ' CON') { document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 4) + ' '; }
                        if (palabra != 'DAR' && document.formulario.comando.value.indexOf(' A ', 0) > 0) { document.formulario.comando.value = document.formulario.comando.value.replace(document.formulario.comando.value, document.formulario.comando.value.substring(0, document.formulario.comando.value.indexOf(' A ', 0))) + ' '; }
                        if (palabra != 'DAR' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 2, document.formulario.comando.value.length) == ' A') { document.formulario.comando.value = document.formulario.comando.value.substring(0, document.formulario.comando.value.length - 2) + ' '; }
                     }
                    else
                     {
                        if(palabra == 'CON' && document.formulario.comando.value != 'COGER' && document.formulario.comando.value != 'USAR' && document.formulario.comando.value != 'DAR' && document.formulario.comando.value != 'IR' && document.formulario.comando.value != 'MIRAR' && document.formulario.comando.value != 'MOVER' && document.formulario.comando.value.substring(0,5) != 'USAR ' && document.formulario.comando.value.substring(0,6) != 'COGER ' && document.formulario.comando.value.substring(0,4) != 'DAR ' && document.formulario.comando.value.substring(0,3) != 'IR ' && document.formulario.comando.value.substring(0,6) != 'MIRAR ' && document.formulario.comando.value.substring(0,6) != 'MOVER ' || palabra == 'A' && document.formulario.comando.value != 'COGER' && document.formulario.comando.value != 'USAR' && document.formulario.comando.value != 'DAR' && document.formulario.comando.value != 'IR' && document.formulario.comando.value != 'MIRAR' && document.formulario.comando.value != 'MOVER' && document.formulario.comando.value.substring(0,5) != 'USAR ' && document.formulario.comando.value.substring(0,6) != 'COGER ' && document.formulario.comando.value.substring(0,4) != 'DAR ' && document.formulario.comando.value.substring(0,3) != 'IR ' && document.formulario.comando.value.substring(0,6) != 'MIRAR ' && document.formulario.comando.value.substring(0,6) != 'MOVER ') { alert('Primero debes elegir una accion'); }
                        else if (palabra == 'CON' && document.formulario.comando.value.substring(0,4) != 'USAR' && document.formulario.comando.value != 'USAR' && formulario.comando.value != '' || palabra == 'A' && document.formulario.comando.value.substring(0,3) != 'DAR' && document.formulario.comando.value != 'DAR' && formulario.comando.value != '') { document.formulario.comando.value = document.formulario.comando.value; alert('No puedes utilizar \"' + palabra + '\" en esta accion'); }
                        else if(palabra == 'CON' && formulario.comando.value == '' || palabra == 'A' && formulario.comando.value == '') { alert('Primero debes elegir una accion'); }
                        else if(palabra == 'CON' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 4, document.formulario.comando.value.length) == ' CON' || palabra == 'CON' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 5, document.formulario.comando.value.length) == ' CON ') { document.formulario.comando.value = document.formulario.comando.value; }
                        else if(palabra == 'A' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 2, document.formulario.comando.value.length) == ' A' || palabra == 'A' && document.formulario.comando.value.substring(document.formulario.comando.value.length - 3, document.formulario.comando.value.length) == ' A ') { document.formulario.comando.value = document.formulario.comando.value; }
                        else if(palabra == 'CON' && document.formulario.comando.value == 'USAR' || palabra == 'A' && document.formulario.comando.value == 'DAR' || palabra == 'CON' && document.formulario.comando.value == 'USAR ' || palabra == 'A' && document.formulario.comando.value == 'DAR ')
                         {
                            alert('Primero debes indicar un objeto');
                         }
                        else
                         {
                            if (document.formulario.comando.value.substring(document.formulario.comando.value.length - palabra.length, document.formulario.comando.value.length) == palabra || document.formulario.comando.value.substring(document.formulario.comando.value.length - palabra.length - 1, document.formulario.comando.value.length) == palabra + ' ') { document.formulario.comando.value = document.formulario.comando.value; }
                            else if (document.formulario.comando.value == '') { document.formulario.comando.value = palabra; }
                            else { document.formulario.comando.value = document.formulario.comando.value + ' ' + palabra + ' '; }
                         }
                     }
                 
                 }
                else { document.formulario.comando.value = ''; }
                
                formulario.comando.focus();
             
             }
        // -->
        </script>


    </head>

    <body bgcolor="#888888" link="#ffffff" alink="#dddddd" vlink="#ffffff" onLoad="javascript:formulario.comando.focus();";>

        <center>

        <h1>Yasmina's Quest</h1>

        <!-- Recordar: poner background ademas de bgcolor -->
        <table width="580" border="0" bgcolor="#ffffff" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center" bgcolor="#ff2233">
                    <!-- <table width="580" height="10" border="0" bgcolor="#ff2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <center>
                    <img src="paisajes/<?php echo $HTTP_SESSION_VARS["estancia"]; ?>.jpg" width="540" height="240" align="center">
                    </center> -->
                    <table width="580" height="10" border="0" bgcolor="#ff2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <table width="540" border="1" bgcolor="#ff2255" cellspacing="0" cellpadding="10">
                        <tr>
                            <td>
                                <?php
                                    //Se incluye el archivo que valida lo que se envia (si se ha enviado algo):
                                    include "validar.php";

                                    //Se incluye el archivo que contiene el codigo para validar la orden enviada:
                                    describir_lugar($HTTP_SESSION_VARS["estancia"]);
                                ?>
                            </td>
                        </tr>
                    </table>
                    <table width="580" height="10" border="0" bgcolor="#ff2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                </td>
            </tr>
            <tr>
                <td align="center" bgcolor="#aa2233">
                    <table width="580" height="10" border="0" bgcolor="#aa2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>
                    <center>
                    <form method="get" action="<?php echo $this_file; ?>" style="display:inline;" name="formulario">
                        [<a href="javascript:poner_texto('BORRAR');" alt="Borrar texto escrito" title="Borrar texto escrito">Borrar</a>] <input type="text" name="comando" value="" size="50" style="background-color:#ff7600; font-weight:bold;"> <input type="submit" name="boton" value="Ok">
                        <?php if (isset($HTTP_GET_VARS["comando"]) && trim($HTTP_GET_VARS["comando"]) != "") { echo "<br>Comando anterior: <b>".strtoupper($HTTP_GET_VARS["comando"])."</b>"; } ?>
                    </form>
                    </center>
                    <table width="580" height="10" border="0" bgcolor="#aa2233" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                </td>
            </tr>
            <tr>
                <td align="left" bgcolor="#aaaabb">
                    <table width="580" height="10" border="0" bgcolor="#aaaabb" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                    <center>
                    <table width="540" border="0" bgcolor="#aaaabb" cellspacing="0" cellpadding="0" align="center">
                        <tr>
                            <td width="540" align="center" bgcolor="#aaaabb">
                            
                                <center>    
                                <table border="1" width="530">
                                    <tr>
                                        <td valign="top" align="center">
                                            <center>
                                            <table border="1" width="330" align="center">
                                                <tr>
                                                    <td><b><a href="javascript:poner_texto('COGER');" alt="COGER" title="COGER">COGER</a></b></td>
                                                    <td><b><a href="javascript:poner_texto('USAR');" alt="USAR" title="USAR">USAR</a></b> (<a href="javascript:poner_texto('CON');" alt="CON" title="CON">CON</a>)</td>
                                                    <td><b><a href="javascript:poner_texto('DAR');" alt="DAR" title="DAR">DAR</a></b> (<a href="javascript:poner_texto('A');" alt="A" title="A">A</a>)</td>
                                                </tr>
                                                <tr>
                                                    <td><b><a href="javascript:poner_texto('IR');" alt="IR" title="IR">IR</a></b></td>
                                                    <td><b><a href="javascript:poner_texto('MIRAR');" alt="MIRAR" title="MIRAR">MIRAR</a></b></td>
                                                    <td><b><a href="javascript:poner_texto('MOVER');" alt="MOVER" title="MOVER">MOVER</a></b></td>
                                                </tr>
                                            </table>
                                            <font size="2"><!--<a href="mapa/<?php if (file_exists("mapa/mapa.jpg")) { echo "mapa.jpg"; } else { echo "mapa.gif"; } ?>" title="Ver mapa">!-->Ver mapa<!-- </a>--> - <a href="javascript:abrir_ayuda();" title="Abrir ventana de ayuda">Ayuda</a></font>
                                            </center>
                                        </td>
                                        <td width="200" valign="top" align="center">
                                            <center>
                                            Inventario:
                                            <?php
                                                $lista_inventario_vacia = TRUE;
                                                if (isset($HTTP_SESSION_VARS["inventario"]))
                                                 {
                                                    $x_inv = 0;
                                                    echo "<center><table border=\"1\" width=\"170\" align=\"center\">";
                                                    $cerrado_tr = TRUE;
                                                    foreach ($HTTP_SESSION_VARS["inventario"] as $indice => $valor)
                                                     {
                                                        if ($HTTP_SESSION_VARS["inventario"][$indice])
                                                         {
                                                            if ($x_inv % 2 == 0) { echo "<tr><td align=\"center\">"; $cerrado_tr = FALSE; }
                                                            else { echo "<td align=\"center\">"; $cerrado_tr = FALSE; }
                                                            echo "<center>";
                                                            
                                                            if (file_exists("inventario/".$indice."_a.jpg") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice."_a.jpg\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("inventario/".$indice."_a.gif") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice."_a.gif\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("inventario/".$indice.".jpg")) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice.".jpg\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("inventario/".$indice.".gif")) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"inventario/".$indice.".gif\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("objetos/".$indice."_a.jpg") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice."_a.jpg\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("objetos/".$indice."_a.gif") && $HTTP_SESSION_VARS["objetos"][$indice]["activado"]) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice."_a.gif\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("objetos/".$indice.".jpg")) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice.".jpg\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            elseif (file_exists("objetos/".$indice.".gif")) { echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\"><img src=\"objetos/".$indice.".gif\" width=\"50\" height=\"50\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" border=\"0\"></a><br>"; }
                                                            
                                                            echo "<font size=\"2\">";
                                                            echo "<a href=\"javascript:poner_texto('".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."');\" alt=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\" title=\"".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."\">".$HTTP_SESSION_VARS["objetos"][$indice]["nombre"]."</a>";
                                                            echo "</font>";
                                                            
                                                            echo "</center>";
                                                            $lista_inventario_vacia = FALSE;
                                                            if ($x_inv % 2 == 0) { echo "</td>"; }
                                                            else { echo "</td></tr>"; $cerrado_tr = TRUE; }
                                                            $x_inv++;
                                                         }
                                                     }
                                                 }

                                                if (!$cerrado_tr) { echo "</tr>"; }
                                                if (isset($lista_inventario_vacia) && $lista_inventario_vacia) { echo "<tr><td><center><i>vacio</i></center></td></tr>"; }
                                                echo "</table>";
                                            ?>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                                </center>
                            </td>
                        </tr>
                    </table>
                    </center>
                    <table width="580" height="10" border="0" bgcolor="#aaaabb" cellspacing="0" cellpadding="0"><tr><td></td></tr></table>                    
                </td>
            </tr>
        </table>
        <table width="580" height="10" border="0" bgcolor="#888888" cellspacing="0" cellpadding="0"><tr><td align="right" bgcolor="#888888" width="580"><table cellspacing="0" cellpadding="0" align="right" bgcolor="#aaaabb" width="300"><tr><td bgcolor="#aaaabb" align="center"><center><i>dedicado a</i> Yasmina Llaveria del Castillo</center></td></tr></table></td></tr></table>

        <font size="1" color="#000000" face="arial">Programa por Juan Alba Maldonado (<a href="mailto:granvino@granvino.com;">granvino@granvino.com</a>)</font>
        
        </center>

    </body>

</html>
