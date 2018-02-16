<?php 
	
	$result=array();
	$questions=$input->post->questions;

	if($input->post->p1==true){
		$answers=array(1,3,4,3,2,1);

		$diff = array_diff_assoc($answers, $questions);


		foreach ($diff as $key => $value) {
			$result[$key]=$value;
		}

		if(count($result)>0){
			$result['state']='denied';
		}else{
			$result['state']='approved';
		}

		header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);
		exit();

	}else{
		$options=array();
		
		$check_1 = isset($_POST['options'][0]) ? $_POST['options'][0]: 0;
		$check_2 = isset($_POST['options'][1]) ? $_POST['options'][1]: 0;
		$check_3 = isset($_POST['options'][2]) ? $_POST['options'][2]: 0;
		$check_4 = isset($_POST['options'][3]) ? $_POST['options'][3]: 0;
		$check_5 = isset($_POST['options'][4]) ? $_POST['options'][4]: 0;
		$check_6 = isset($_POST['options'][5]) ? $_POST['options'][5]: 0;
		$check_7 = isset($_POST['options'][6]) ? $_POST['options'][6]: 0;
		$check_8 = isset($_POST['options'][7]) ? $_POST['options'][7]: 0;

		$options=array($check_1,$check_2,$check_3,$check_4,$check_5,$check_6,$check_7,$check_8);
		$answers=array(2,1,3,2,2);
		$answers_opt=array("0"=>1,"1"=>3,"2"=>4,"3"=>5,"4"=>6);


		$diff_opt=array_diff_assoc($answers_opt, $options);
		$diff = array_diff_assoc($answers, $questions);

		foreach ($diff as $key => $value) {
			$result[$key]=$value;
		}

			
		if(count($result)>0){
			$result['state']='denied';
		}else{
			$result['state']='approved';
		}

		header('Content-type: application/json; charset=utf-8');
		echo json_encode($result);
		exit();
		

	}
	
