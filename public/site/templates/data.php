<?php 
      $get_viajes=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/viajes/totales');
      $get_registrados=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/clientes/totales');
      
      if($get_viajes || $get_registrados){
	      $obj_viajes = json_decode($get_viajes);
	      $obj_registrados = json_decode($get_registrados);
	      $viajes_totales=$obj_viajes->result->respuesta->viajes;
	      $usuarios_registrados=$obj_registrados->result->respuesta->clientes_anuales_total;
	      $array = array('viajes' => number_format($viajes_totales), 'clientes' => number_format($usuarios_registrados));
      }else{
      	$get_total=file_get_contents('http://lareal.com.mx/data.php');
        
      	$obj_total = json_decode($get_total);
      
	$array = array('viajes' => $obj_total->viajes, 'clientes' => $obj_total->clientes);
      }
      
      echo json_encode($array);

      
      exit;