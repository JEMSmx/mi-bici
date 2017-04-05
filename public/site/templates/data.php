<?php
      $get_viajes=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/viajes/totales');
      $get_registrados=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/clientes/totales');
      $obj_viajes = json_decode($get_viajes);
      $obj_registrados = json_decode($get_registrados);
      $viajes_totales=$obj_viajes->result->respuesta->viajes;
      $usuarios_registrados=$obj_registrados->result->respuesta->clientes_anuales_total;
      $array = array('viajes' => number_format($viajes_totales), 'clientes' => number_format($usuarios_registrados));

      $open_data=$pages->find("template=open-data");
      $open_data[0]->of(false);
      $open_data[0]->txt1=$viajes_totales;
      $open_data[0]->txt2=$usuarios_registrados;
      $open_data[0]->save();

      echo json_encode($array);

      exit;
