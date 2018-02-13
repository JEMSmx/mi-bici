<?php 
	
	$result=array();
	$questions=$input->post->questions;

	if($input->post->p1==true){
		$answers=array(1,3,4,3,2,1);
	}else{
		$answers=array(2,1,3,2,2);
	}
	


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
