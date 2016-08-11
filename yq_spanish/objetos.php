<?php

//Calcula si no existe la variable de sesion con el inventario:
if (!isset($HTTP_SESSION_VARS["inventario"]))
 {

    //Se inicia la variable de sesion con el inventario (vacia):
    $HTTP_SESSION_VARS["inventario"] = array(
                                                0 => FALSE,
                                                1 => FALSE,
                                                2 => FALSE,
                                                3 => FALSE,
                                                4 => FALSE,
                                                5 => FALSE,
                                                6 => FALSE,
                                                7 => FALSE,
                                                8 => FALSE,
                                                9 => FALSE,
                                                10 => FALSE
                                            );


    //Objeto POLLO:
    $HTTP_SESSION_VARS["objetos"][0]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][0]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][0]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][0]["nombre"] = "POLLO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][0]["nombre_nuevo"] = "POLLO LOCO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_usarse"] = "El pollo de goma se vuelve rabioso y loco."; //Frase a mostrar cuando el objeto se activa (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][0]["lugar"] = FALSE; //No se encuentra en ningun lugar.
    $HTTP_SESSION_VARS["objetos"][0]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][0]["activa_salidas_al_usarse"] = "3"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR"] = "Es un viejo pollo de goma con polea en el centro."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][0]["MIRAR_nuevo"] = "Es un viejo pollo de goma con polea en el centro, muy enfadado."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][0]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][0]["COGER"] = FALSE; //No se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][0]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][0]["USAR"] = "LLAVE ENANA, MARIPOSA"; //No se utiliza con nada.
    $HTTP_SESSION_VARS["objetos"][0]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][0]["top_position"] = 15; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position"] = 20; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][0]["top_position_activado"] = 15; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][0]["left_position_activado"] = 20; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto TUMBA SOSPECHOSA/HUESO:
    $HTTP_SESSION_VARS["objetos"][1]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][1]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][1]["alternar_coger_al_activar"] = TRUE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][1]["nombre"] = "TUMBA SOSPECHOSA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][1]["nombre_nuevo"] = "HUESO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_usarse"] = "Cavas la tumba hasta encontrar un hueso."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_cogerse"] = "Te llevas el hueso con disimulo."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["frase_al_no_cogerse"] = "Quedaria muy bien en mi habitacion... pero mejor no."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][1]["lugar"] = "2"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][1]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][1]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR"] = "Una tumba muy pero que muy sospechosa."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][1]["MIRAR_nuevo"] = "Un simple hueso, seguramente de un hombre mayor me imagino."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][1]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][1]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][1]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][1]["USAR"] = "PALA, PERRO RABIOSO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][1]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][1]["top_position"] = 30; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position"] = 150; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][1]["top_position_activado"] = 30; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][1]["left_position_activado"] = 150; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto COFRE/COFRE ABIERTO:
    $HTTP_SESSION_VARS["objetos"][2]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][2]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][2]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][2]["nombre"] = "COFRE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][2]["nombre_nuevo"] = "COFRE ABIERTO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_usarse"] = "Rompes el cofre y descubres un monton de dinero."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["frase_al_no_cogerse"] = "Pesa demasiado y ademas es muy feo."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][2]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][2]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][2]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["activa_objetos_al_usarse"] = "3"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR"] = "Es un cofre muy bien cerrado... parece fragil."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][2]["MIRAR_nuevo"] = "Es un simple cofre abierto."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][2]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][2]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][2]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][2]["USAR"] = "HACHA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][2]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][2]["top_position"] = 55; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position"] = 45; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][2]["top_position_activado"] = 55; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][2]["left_position_activado"] = 45; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto DINERO:
    $HTTP_SESSION_VARS["objetos"][3]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][3]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][3]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][3]["nombre"] = "DINERO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][3]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_usarse"] = "Le das el dinero al vendedor."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_cogerse"] = "Coges todo el dinero con gran astucia."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][3]["lugar"] = "3"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][3]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][3]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["desactiva_objetos_al_usarse"] = "3"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR"] = "Es mucho dinero. Mas o menos asi como un monton, aproximadamente."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][3]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][3]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][3]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][3]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][3]["USAR"] = "VENDEDOR"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][3]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][3]["top_position"] = 45; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position"] = 60; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][3]["top_position_activado"] = 45; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][3]["left_position_activado"] = 60; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PALANCA CALIENTE/PALANCA:
    $HTTP_SESSION_VARS["objetos"][4]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][4]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][4]["alternar_coger_al_activar"] = TRUE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][4]["nombre"] = "PALANCA CALIENTE"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][4]["nombre_nuevo"] = "PALANCA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_usarse"] = "Coges la palanca caliente con los guantes y la separas del fuego para que se enfrie."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_cogerse"] = "Coges la palanca y te la guardas."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["frase_al_no_cogerse"] = "Quema demasiado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][4]["lugar"] = "4"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][4]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][4]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR"] = "Es una palanca al rojo vivo, ya que esta en un brasero."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][4]["MIRAR_nuevo"] = "La palanca ya no esta en el brasero, por lo que ahora esta fria."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][4]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][4]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][4]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][4]["USAR"] = "GUANTES, HACHA CLAVADO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][4]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][4]["top_position"] = 22; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position"] = 130; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][4]["top_position_activado"] = 32; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][4]["left_position_activado"] = 160; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto HACHA CLAVADO/HACHA:
    $HTTP_SESSION_VARS["objetos"][5]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][5]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][5]["alternar_coger_al_activar"] = TRUE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][5]["nombre"] = "HACHA CLAVADO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][5]["nombre_nuevo"] = "HACHA"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_usarse"] = "Haces palanca para quitar el hacha, y la logras soltar del tocon donde yacia."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_cogerse"] = "Por fin consigues el hacha."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["frase_al_no_cogerse"] = "No puedo, esta clavada en un tocon."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][5]["lugar"] = "5"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][5]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][5]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR"] = "Es un hacha clavado en un tocon de encina."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][5]["MIRAR_nuevo"] = "El hacha ya no esta clavada en ningun lugar."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][5]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][5]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][5]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][5]["USAR"] = "PALANCA, COFRE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][5]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][5]["top_position"] = 28; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position"] = 145; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][5]["top_position_activado"] = 65; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][5]["left_position_activado"] = 145; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto VENDEDOR:
    $HTTP_SESSION_VARS["objetos"][6]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][6]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][6]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][6]["nombre"] = "VENDEDOR"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][6]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_usarse"] = "Por ese dinero el vendedor solo te ofrece una pala."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["frase_al_no_cogerse"] = "No creo que a el le guste la idea."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][6]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][6]["animado"] = TRUE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][6]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["activa_objetos_al_usarse"] = "7"; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR"] = "Es un vendedor bastante viejo y cascarrabias."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][6]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][6]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][6]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][6]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][6]["USAR"] = "DINERO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][6]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][6]["top_position"] = 25; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position"] = 185; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][6]["top_position_activado"] = 25; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][6]["left_position_activado"] = 185; //Posicion respecto a la X cuando esta activado (0 = izquierda)


    //Objeto PALA:
    $HTTP_SESSION_VARS["objetos"][7]["estado"] = FALSE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][7]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][7]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][7]["nombre"] = "PALA"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][7]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_cogerse"] = "Coges la pala que tanto dinero te ha costado."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][7]["lugar"] = "6"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][7]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][7]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR"] = "Es una bonita pala algo pesada."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][7]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][7]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][7]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][7]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][7]["USAR"] = "TUMBA SOSPECHOSA"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][7]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][7]["top_position"] = 58; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position"] = 80; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][7]["top_position_activado"] = 58; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][7]["left_position_activado"] = 80; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto SILBATO AHUYENTAGATOS:
    $HTTP_SESSION_VARS["objetos"][8]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][8]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][8]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][8]["nombre"] = "SILBATO AHUYENTAGATOS"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][8]["nombre_nuevo"] = FALSE; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_usarse"] = "Usas el silbato con la esperanza de ahuyentar al gato. El gato se va corriendo."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_cogerse"] = "Como nadie mira, coges ese silbato tan chulo."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["frase_al_no_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][8]["lugar"] = "7"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][8]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][8]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR"] = "Es un silbato demasiado chulo como para no estar mirandolo siempre."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][8]["MIRAR_nuevo"] = FALSE; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][8]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][8]["COGER"] = TRUE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][8]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][8]["USAR"] = "GATO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][8]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][8]["top_position"] = 62; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position"] = 190; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][8]["top_position_activado"] = 62; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][8]["left_position_activado"] = 190; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto GATO/GUANTES:
    $HTTP_SESSION_VARS["objetos"][9]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][9]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][9]["alternar_coger_al_activar"] = TRUE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][9]["nombre"] = "GATO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][9]["nombre_nuevo"] = "GUANTES"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_usarse"] = FALSE; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_cogerse"] = "Al fin puedes coger los guantes."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["frase_al_no_cogerse"] = "Ojala pudiera coger los guantes que el custodia... pero me da miedo."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][9]["lugar"] = "8"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][9]["animado"] = FALSE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][9]["activa_salidas_al_usarse"] = FALSE; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["desactiva_objetos_al_usarse"] = FALSE; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR"] = "Es un gato bastante moleston y feo, que no me deja coger los guantes que tiene debajo."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][9]["MIRAR_nuevo"] = "Unos preciosos guantes bien gruesos, aunque huelen a gato."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][9]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][9]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][9]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][9]["USAR"] = "SILBATO AHUYENTAGATOS, PALANCA CALIENTE"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][9]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][9]["top_position"] = 74; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position"] = 150; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][9]["top_position_activado"] = 105; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][9]["left_position_activado"] = 150; //Posicion respecto a la X cuando esta activado (0 = izquierda)



    //Objeto PERRO RABIOSO:
    $HTTP_SESSION_VARS["objetos"][10]["estado"] = TRUE; //Aparece en la descripcion.
    $HTTP_SESSION_VARS["objetos"][10]["activado"] = FALSE; //Todavia no ha sido activado.
    $HTTP_SESSION_VARS["objetos"][10]["alternar_coger_al_activar"] = FALSE; //Al activarse, la propiedad "COGER" sigue igual.
    $HTTP_SESSION_VARS["objetos"][10]["nombre"] = "PERRO RABIOSO"; //Nombre del objeto.
    $HTTP_SESSION_VARS["objetos"][10]["nombre_nuevo"] = "PERRO CONTENTO"; //Nombre del objeto despues de usarse solo o con algo.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_usarse"] = "El perro se pone a jugar con el hueso, y se pone muy feliz."; //Frase a mostrar cuando el objeto se activa.
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_cogerse"] = FALSE; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["frase_al_no_cogerse"] = "No pienso ni tocarlo, no vaya a ser que me muerda."; //Frase a mostrar cuando el objeto se intenta coger y no se puede (en este caso no hay).
    $HTTP_SESSION_VARS["objetos"][10]["lugar"] = "9"; //Se encuentra en el lugar 2.
    $HTTP_SESSION_VARS["objetos"][10]["animado"] = TRUE; //No es un ser vivo.
    $HTTP_SESSION_VARS["objetos"][10]["activa_salidas_al_usarse"] = "10"; //Define si activa salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["activa_objetos_al_usarse"] = FALSE; //Define si activa objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_salidas_al_usarse"] = FALSE; //Define si desactiva salidas o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["desactiva_objetos_al_usarse"] = "1"; //Define si desactiva objetos o no al usarse.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR"] = "Es un perro muy rabioso y si me acerco mucho me mordera. Mejor no lo hago."; //Texto a mostrar cuando se mira.
    $HTTP_SESSION_VARS["objetos"][10]["MIRAR_nuevo"] = "Ahora ya no me da miedo, tiene un aspecto docil y encantador. Estaria hambriento el pobre."; //Texto a mostrar cuando se mira, una vez activado el objeto.
    $HTTP_SESSION_VARS["objetos"][10]["MOVER"] = FALSE; //No se puede mover.
    $HTTP_SESSION_VARS["objetos"][10]["COGER"] = FALSE; //Si se puede coger (a no ser que ya se tenga).
    $HTTP_SESSION_VARS["objetos"][10]["IR"] = FALSE; //No se puede ir a ella.
    $HTTP_SESSION_VARS["objetos"][10]["USAR"] = "HUESO"; //Se puede utilizar con los objetos: "PUERTA DORADA" y "PUERTA GRANDE".
    $HTTP_SESSION_VARS["objetos"][10]["USARSE"] = FALSE; //No se puede utilizar sola.
    $HTTP_SESSION_VARS["objetos"][10]["top_position"] = 60; //Posicion respecto a la Y (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][10]["left_position"] = 80; //Posicion respecto a la X (0 = izquierda)
    $HTTP_SESSION_VARS["objetos"][10]["top_position_activado"] = 18; //Posicion respecto a la Y cuando esta activado (0 = arriba)
    $HTTP_SESSION_VARS["objetos"][10]["left_position_activado"] = 80; //Posicion respecto a la X cuando esta activado (0 = izquierda)



 }
 
?>
