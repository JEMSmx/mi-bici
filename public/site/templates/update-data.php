<?php 
      $get_viajes=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/viajes/totales');
      $get_registrados=file_get_contents('https://amg.bktbp.com/_amg/api/v1/public/clientes/totales');
      
      if($get_viajes && $get_registrados){
	      $obj_viajes = json_decode($get_viajes);
	      $obj_registrados = json_decode($get_registrados);
	      $viajes_totales=$obj_viajes->result->respuesta->viajes;
	      $usuarios_registrados=$obj_registrados->result->respuesta->clientes_anuales_total;
	
	      $open_data=$pages->find("template=open-data");
	      $open_data[0]->of(false);
	      $open_data[0]->txt1=$viajes_totales;
	      $open_data[0]->txt2=$usuarios_registrados;
	      $open_data[0]->save();
	      
      }else{
      	$get_total=file_get_contents('http://lareal.com.mx/data.php');
        
      	$obj_total = json_decode($get_total);
      
	
	      $open_data=$pages->find("template=open-data");
	      $open_data[0]->of(false);
	      $open_data[0]->txt1=str_replace(",", "", $obj_total->viajes);
	      $open_data[0]->txt2=str_replace(",", "", $obj_total->clientes);
	      $open_data[0]->save(); 
	      
      }