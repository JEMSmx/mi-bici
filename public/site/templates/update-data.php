<?php 
      $get_viajes=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/viajes/totales');
      $get_registrados=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/clientes/totales');
      
      if($get_viajes && $get_registrados){
	      $obj_viajes = json_decode($get_viajes);
	      $obj_registrados = json_decode($get_registrados);
	      $viajes_totales=$obj_viajes->result->respuesta->viajes;
	      $usuarios_registrados=$obj_registrados->result->respuesta->clientes_anuales_total;
	
	      $open_data=$pages->find("template=open-data");
	      if($viajes_totales==0 || $usuarios_registrados==0 || empty($viajes_totales) || empty($usuarios_registrados)) exit;
	      foreach($open_data as $open){
	      	$open->of(false);
			$open->txt1=$viajes_totales;
			$open->txt2=$usuarios_registrados;
			$open->save();
	      }
      }