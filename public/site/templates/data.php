<?php       
      $open_data=$pages->find("template=open-data");
      foreach($open_data as $open){
            $array = array('viajes' => number_format($open->txt1), 'clientes' => number_format($open->txt2));
            }
            
         echo json_encode($array);