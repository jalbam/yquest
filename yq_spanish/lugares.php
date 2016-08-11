<?php

//Si no existe la variable de sesion "estancia", se pone a 1 (estaremos en el lugar numero 1, al principio):
if (!isset($HTTP_SESSION_VARS["estancia"]))
 {
    $HTTP_SESSION_VARS["estancia"] = 1;
    $frase_inicial = "Debes ir a rescatar a la princesa Yasmina que la ha raptado el malvado Chivi y la tiene secuestrada en su cueva secreta, custiodada por un horrible guardian.";
 }

$lugar_para_acabar_el_juego = 10;
$frase_final = "Entras en la cueva y con mucha astucia le metes una paliza al malvado Chivi y rescatas a tu amadisima princesa Yasmina. Fin del juego.";

if (!isset($HTTP_SESSION_VARS["lugares"][1])) { $HTTP_SESSION_VARS["lugares"][1] = TRUE; } //El lugar es visitable.
$lugar[1]["descripcion"] = "Te encuentras en el refugi de La Mussara."; //Descripcion del lugar.
$lugar[1]["NORTE"] = FALSE; //El norte va al lugar numero 2.
$lugar[1]["SUR"] = "4"; //No puede ir al sur.
$lugar[1]["ESTE"] = "2"; //El este va al lugar numero 3.
$lugar[1]["OESTE"] = FALSE; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][2])) { $HTTP_SESSION_VARS["lugares"][2] = TRUE; } //El lugar es visitable.
$lugar[2]["descripcion"] = "Estas en el tenebroso cementerio del pueblo. Donde una niebla siempre esta presente en el lugar. Entre tantas ruinas y maleza, apenas se distinguen las lapidas."; //Descripcion del lugar.
$lugar[2]["NORTE"] = FALSE; //El norte va al lugar numero 2.
$lugar[2]["SUR"] = "5"; //No puede ir al sur.
$lugar[2]["ESTE"] = "3"; //El este va al lugar numero 3.
$lugar[2]["OESTE"] = "1"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][3])) { $HTTP_SESSION_VARS["lugares"][3] = TRUE; } //El lugar es visitable.
$lugar[3]["descripcion"] = "Estas dentro de una preciosa casa, que destaca entre tanta penumbra. Por su aspecto, dirias que es una casa bastante cara."; //Descripcion del lugar.
$lugar[3]["NORTE"] = FALSE; //El norte va al lugar numero 2.
$lugar[3]["SUR"] = "6"; //No puede ir al sur.
$lugar[3]["ESTE"] = FALSE; //El este va al lugar numero 3.
$lugar[3]["OESTE"] = "2"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][4])) { $HTTP_SESSION_VARS["lugares"][4] = TRUE; } //El lugar es visitable.
$lugar[4]["descripcion"] = "Has entrado en lo que parece ser una casa de un herrero. Pero, por suerte o por desgracia, este no se encuentra aqui en estos momentos."; //Descripcion del lugar.
$lugar[4]["NORTE"] = "1"; //El norte va al lugar numero 2.
$lugar[4]["SUR"] = "7"; //No puede ir al sur.
$lugar[4]["ESTE"] = "5"; //El este va al lugar numero 3.
$lugar[4]["OESTE"] = FALSE; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][5])) { $HTTP_SESSION_VARS["lugares"][5] = TRUE; } //El lugar es visitable.
$lugar[5]["descripcion"] = "Esto tiene el aspecto de lo que en un pasado pudo ser un bosque muy espeso. Ahora muchos de los arboles estan talados."; //Descripcion del lugar.
$lugar[5]["NORTE"] = "2"; //El norte va al lugar numero 2.
$lugar[5]["SUR"] = "8"; //No puede ir al sur.
$lugar[5]["ESTE"] = "6"; //El este va al lugar numero 3.
$lugar[5]["OESTE"] = "4"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][6])) { $HTTP_SESSION_VARS["lugares"][6] = TRUE; } //El lugar es visitable.
$lugar[6]["descripcion"] = "Has entrado en La Tienda del Bosque, donde quiza puedas comprar algo al vendedor."; //Descripcion del lugar.
$lugar[6]["NORTE"] = "3"; //El norte va al lugar numero 2.
$lugar[6]["SUR"] = "9"; //No puede ir al sur.
$lugar[6]["ESTE"] = FALSE; //El este va al lugar numero 3.
$lugar[6]["OESTE"] = "5"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][7])) { $HTTP_SESSION_VARS["lugares"][7] = TRUE; } //El lugar es visitable.
$lugar[7]["descripcion"] = "Estas en la casa de lo que parece ser un cazador, por lo que se puede observar."; //Descripcion del lugar.
$lugar[7]["NORTE"] = "4"; //El norte va al lugar numero 2.
$lugar[7]["SUR"] = FALSE; //No puede ir al sur.
$lugar[7]["ESTE"] = "8"; //El este va al lugar numero 3.
$lugar[7]["OESTE"] = FALSE; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][8])) { $HTTP_SESSION_VARS["lugares"][8] = TRUE; } //El lugar es visitable.
$lugar[8]["descripcion"] = "Entras en una casa, la cual desprende un olor peculiar. Puedes ver que esta bastante desordenada."; //Descripcion del lugar.
$lugar[8]["NORTE"] = "5"; //El norte va al lugar numero 2.
$lugar[8]["SUR"] = FALSE; //No puede ir al sur.
$lugar[8]["ESTE"] = "9"; //El este va al lugar numero 3.
$lugar[8]["OESTE"] = "7"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][9])) { $HTTP_SESSION_VARS["lugares"][9] = TRUE; } //El lugar es visitable.
$lugar[9]["descripcion"] = "Has entrado en un lugar muy oscuro, donde puedes ver una cueva. Quiza sea la cueva donde esta tu amada."; //Descripcion del lugar.
$lugar[9]["NORTE"] = "6"; //El norte va al lugar numero 2.
$lugar[9]["SUR"] = "10"; //No puede ir al sur.
$lugar[9]["ESTE"] = FALSE; //El este va al lugar numero 3.
$lugar[9]["OESTE"] = "8"; //No se puede ir al oeste.

if (!isset($HTTP_SESSION_VARS["lugares"][10])) { $HTTP_SESSION_VARS["lugares"][10] = FALSE; } //El lugar es visitable.
$lugar[10]["descripcion"] = FALSE; //Descripcion del lugar.
$lugar[10]["NORTE"] = FALSE; //El norte va al lugar numero 2.
$lugar[10]["SUR"] = FALSE; //No puede ir al sur.
$lugar[10]["ESTE"] = FALSE; //El este va al lugar numero 3.
$lugar[10]["OESTE"] = FALSE; //No se puede ir al oeste.

?>
