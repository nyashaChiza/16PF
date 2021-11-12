<?php
// check at the end of each get_score function to make sure all two confitions have been covered
//##############################################################################
//get factor $score

function get_score_A($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	 # echo "Key=" . $question . ", Value=" . $weight.'<br>';

		if($question == '1A' and $weight==2){
			$score = $score+2;  
		}		
		else if ($question == '1A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '31A' and $weight==2 ){
			$score = $score + 2;
		}
		else if ($question == '31A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '33A' and $weight==2){
			$score = $score + 2;
		}
		else if ($question == '33A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '63A' and $weight==1){
			$score = $score + 1;
		}
		else if ($question == '63A' and $weight==0){
			$score = $score + 2;
		}
		else if($question == '65A' and $weight==1){
			$score = $score + 1;
		}
		else if ($question == '65A' and $weight==0){
			$score = $score + 2;
		}
		else if($question == '96A' and $weight==2){
			$score = $score + 2;
		}
		else if ($question == '96A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '127A' and $weight==2){
			$score = $score + 2;
		}
		else if ($question == '127A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '129A' and $weight==1){
			$score = $score + 1;
		}
		else if ($question == '129A' and $weight==0){
			$score = $score + 2;
		}
		else if($question == '159A' and $weight==2){
			$score = $score + 2;
		}
		else if ($question == '159A' and $weight==1){
			$score = $score + 1;
		}
		else if($question == '161A' and $weight==1){
			$score = $score + 1;
		}
		else if ($question == '161A' and $weight==0){
			$score = $score + 2;
		}
	}
	return $score;
}
//-----------------------------------------------
function get_score_B($factor){
	$score = 0;
foreach($factor as $question => $weight) {

	if($question == '171A' and $weight==2){
		$score = $score + 1;
	}
	else if ($question == '172A' and $weight==0){
		$score = $score + 1;
	}
	else if($question == '173A' and $weight==2){
		$score = $score + 1;
	}
	//else if ($factor['173A'] == 2){
	//	$score = $score + 1;
	//}
	else if($question == '174A' and $weight==2){
		$score = $score + 1;
	}
	else if ($question == '175A' and $weight==0){
		$score = $score + 1;
	}
	else if($question == '176A' and $weight==2){
		$score = $score + 1;
	}
	else if ($question == '177A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '178A' and $weight==0){
		$score = $score + 1;
	}
	else if ($question == '179A' and $weight==0){
		$score = $score + 1;
	}
	else if($question == '180A' and $weight==0){
		$score = $score + 1;
	}
	else if ($question == '181A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '182A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '183A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '184A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '185A' and $weight==1){
		$score = $score + 1;
	}
	}
	return $score;
}
//-----------------------------------------------
function get_score_C($factor){
	$score = 0;
foreach($factor as $question => $weight) {
//	  echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '2A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '2A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '32A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '32A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '35A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '35A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '64A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '64A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '67A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '67A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '97A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '97A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '128A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '128A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '131A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '131A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '160A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '160A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '162A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '162A' and $weight==1){
		$score = $score + 1;
	}
	}
	return $score;
} 

//-----------------------------------------------
function get_score_E($factor){
	$score = 0;
foreach($factor as $question => $weight) {
//	  echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '3A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '3A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '36A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '36A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '38A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '38A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '66A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '66A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '99A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '99A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '102A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '102A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '130A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '130A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '132A' and $weight==2){
		$score = $score + 2;
	}
	//stopped here
	else if ($question == '131A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '163A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '163A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '165A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '165A' and $weight==1){
		$score = $score + 1;
	}
	}
	return $score;
} 

//-----------------------------------------------
function get_score_F($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '4A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '4A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '6A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '6A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '37A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '37A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '39A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '39A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '68A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '68A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '70A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '70A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '100A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '100A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '103A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '103A' and $weight==1){
		$score = $score + 2;
	}
	else if ($question == '134A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '134A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '164A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '164A' and $weight==1){
		$score = $score + 1;
	}
	}
	return $score;
} 

//-----------------------------------------------
function get_score_G($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '5A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '5A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '7A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '7A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '40A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '40A' and $weight==1){
		$score = $score + 2;
	}
	else if($question == '69A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '69A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '72A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '72A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '104A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '104A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '106A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '106A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '133A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '133A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '136A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '136A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '166A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '166A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '168A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '168A' and $weight==1){
		$score = $score + 1;
	}
	}
	return $score;
} 

//-----------------------------------------------
function get_score_H($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '9A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '9A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '41A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '41A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '71A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '71A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '73A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '73A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '105A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '105A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '107A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '107A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '135A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '135A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '137A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '137A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '167A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '167A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '169A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '169A' and $weight==0){
		$score = $score + 2;
	}
	
	}
	return $score;
} 

//-----------------------------------------------
function get_score_I($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '8A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '8A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '42A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '42A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '44A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '44A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '74A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '74A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '77A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '77A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '108A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '108A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '110A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '110A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '138A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '138A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '140A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '140A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '170A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '170A' and $weight==0){
		$score = $score + 2;
	}
	
	}
	return $score;
} 

//-----------------------------------------------
function get_score_L($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '11A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '11A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '13A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '13A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '43A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '43A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '45A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '45A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '76A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '76A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '78A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '78A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '109A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '109A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '112A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '112A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '139A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '139A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '141A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '141A' and $weight==1){
		$score = $score + 1;
	}
	
	}
	return $score;
} 

//-----------------------------------------------
function get_score_M($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '12A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '12A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '14A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '14A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '17A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '17A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '46A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '46A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '49A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '49A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '79A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '78A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '81A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '81A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '111A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '111A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '114A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '114A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '142A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '142A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '145A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '145A' and $weight==1){
		$score = $score + 1;
	}

	}
	return $score;
} 

//-----------------------------------------------
function get_score_N($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '15A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '15A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '18A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '18A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '47A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '47A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '50A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '50A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '80A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '80A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '84A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '84A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '113A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '113A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '117A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '117A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '143A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '143A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '148A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '148A' and $weight==1){
		$score = $score + 1;
	}

	}
	return $score;
} 

//-----------------------------------------------
function get_score_O($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '19A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '19A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '21A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '21A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '51A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '51A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '54A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '54A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '82A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '82A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '87A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '87A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '116A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '116A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '119A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '119A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '146A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '146A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '150A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '150A' and $weight==1){
		$score = $score + 1;
	}

	}
	return $score;
} 

//-----------------------------------------------
function get_score_Q1($factor){
	$score = 0;
foreach($factor as $question => $weight) {
	  //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '20A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '20A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '22A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '22A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '24A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '24A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '52A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '52A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '53A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '53A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '55A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '55A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '83A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '83A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '86A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '86A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '88A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '88A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '118A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '118A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '120A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '120A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '147A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '147A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '149A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '149A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '151A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '151A' and $weight==1){
		$score = $score + 2;
	}

	}
	return $score;
} 

//-----------------------------------------------
function get_score_Q2($factor){
	$score = 0;
foreach($factor as $question => $weight) {
//	  echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '25A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '25A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '27A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '27A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '58A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '58A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '59A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '59A' and $weight==1){
		$score = $score + 2;
	}
	else if($question == '89A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '89A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '92A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '92A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '121A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '121A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '123A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '123A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '152A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '152A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '156A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '156A' and $weight==0){
		$score = $score + 2;
	}

	}
	return $score;
} 
 
//-----------------------------------------------
function get_score_Q3($factor){
	$score = 0;
foreach($factor as $question => $weight) {
 //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '26A' and $weight==1){
		$score = $score +1 ;
	}
	else if ($question == '26A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '29A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '29A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '57A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '57A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '61A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '61A' and $weight==1){
		$score = $score + 2;
	}
	else if($question == '90A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '90A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '93A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '93A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '122A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '122A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '125A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '125A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '154A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '154A' and $weight==0){
		$score = $score + 2;
	}
	else if ($question == '157A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '157A' and $weight==1){
		$score = $score + 1;
	}

	}
	return $score;
}
//-----------------------------------------------
function get_score_Q4($factor){
	$score = 0;
foreach($factor as $question => $weight) {
 //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '28A' and $weight==2){
		$score = $score +2 ;
	}
	else if ($question == '28A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '30A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '30A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '60A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '60A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '62A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '62A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '91A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '91A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '94A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '94A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '124A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '124A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '126A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '126A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '155A' and $weight==2){
		$score = $score + 2;
	}
	else if ($question == '155A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '158A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '158A' and $weight==0){
		$score = $score + 2;
	}

	}
	return $score;
}

//-----------------------------------------------
function get_score_IM($factor){
	$score = 0;
foreach($factor as $question => $weight) {
 //echo "Key=" . $question . ", Value=" . $weight.'<br>';

	if($question == '16A' and $weight==2){
		$score = $score +2 ;
	}
	else if($question == '16A' and $weight==1){
		$score = $score + 1;
	}
	else if($question == '23A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '23A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '34A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '34A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '48A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '48A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '58A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '58A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '75A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '75A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '85A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '85A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '95A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '95A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '101A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '101A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '115A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '115A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '144A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '144A' and $weight==0){
		$score = $score + 2;
	}
	else if($question == '153A' and $weight==1){
		$score = $score + 1;
	}
	else if ($question == '153A' and $weight==0){
		$score = $score + 2;
	}
	}
	return $score;
}

//##############################################################################
// get stern
function get_stern($factor, $score){
if($factor == 'A'){
	if($score < 6){
		return array('A',1);
	}
	else if($score>= 7 and $score<=8){
		return array('A',2);
	}
	else if($score>= 9 and $score<=10){
		return array('A',3);
	}
	else if($score>= 11 and $score<=13){
		return array('A',4);
	}
	else if($score>= 14 and $score<=15){
		return array('A',5);
	}
	else if($score>= 16 and $score<=17){
		return array('A',6);
	}
	else if($score == 18){
		return array('A',7);
	}
	else if($score>= 19 and $score<=20){
		return array('A',8);
	}
	else if($score == 21){
		return array('A',9);
	}
	else if($score == 22){
		return array('A',10);
	}
}
else if ($factor == 'B'){
	if($score <= 3){
		return array('B',1);
	}
	else if($score<= 4){
		return array('B',2);
	}
	else if($score == 5){
		return array('B',3);
	}
	else if($score== 6 or $score==7){
		return array('B',4);
	}
	else if($score>= 8 and $score<=9){
		return array('B',5);
	}
	else if($score>= 10 and $score<=11){
		return array('B',6);
	}
	else if($score>= 12 and $score<=13){
		return array('B',7);
	}
	else if($score== 14){
		return array('B',8);
	}
	else if($score== 15){
		return array('B',9);
	}
}
else if ($factor == 'C'){
	if($score <= 5){
		return array('C',1);
	}
	else if($score<= 6){
		return array('C',2);
	}
	else if($score>= 7 and $score<=9){
		return array('C',3);
	}
	else if($score>= 10 and $score<=11){
		return array('C',4);
	}
	else if($score>= 12 and $score<=14){
		return array('C',5);
	}
	else if($score>= 15 and $score<=16){
		return array('C',6);
	}
	else if($score>= 17 and $score<=18){
		return array('C',7);
	}
	else if($score== 19){
		return array('C',8);
	}
	else if($score== 20){
		return array('C',9);
	}
}
else if ($factor == 'E'){
	if($score <= 3){
		return array('E',1);
	}
	else if($score>= 4 and $score<=6){
		return array('E',2);
	}
	else if($score>= 7 and $score<=9){
		return array('E',3);
	}
	else if($score>= 10 and $score<=11){
		return array('E',4);
	}
	else if($score>= 12 and $score<=13){
		return array('E',5);
	}
	else if($score>= 14 and $score<=15){
		return array('E',6);
	}
	else if($score>= 16 and $score<=17){
		return array('E',7);
	}
	else if($score== 18){
		return array('E',8);
	}
	else if($score>= 19 and $score<=20){
		return array('E',9);
	}
}
else if ($factor == 'F'){
	if($score <= 2){
		return array('F',1);
	}
	else if($score>= 3 and $score<=4){
		return array('F',2);
	}
	else if($score>= 5 and $score<=7){
		return array('F',3);
	}
	else if($score>= 8 and $score<=10){
		return array('F',4);
	}
	else if($score>= 11 and $score<=13){
		return array('F',5);
	}
	else if($score>= 14 and $score<=15){
		return array('F',6);
	}
	else if($score>= 16 and $score<=17){
		return array('F',7);
	}
	else if($score>= 18 and $score<=19){
		return array('F',8);
	}
	else if($score==20){
		return array('F',9);
	}

	
}
else if ($factor == 'G'){
	if($score <= 4){
		return array('G',1);
	}
	else if($score>= 5 and $score<=8){
		return array('G',2);
	}
	else if($score>= 5 and $score<=8){
		return array('G',3);
	}
	else if($score>= 9 and $score<=10){
		return array('G',4);
	}
	else if($score>= 11 and $score<=12){
		return array('G',5);
	}
	else if($score>= 13 and $score<=14){
		return array('G',6);
	}
	else if($score==18){
		return array('G',7);
	}
	else if($score>= 19 and $score<=20){
		return array('G',8);
	}
	else if($score>= 21 and $score<=22){
		return array('G',9);
	}

	
	}	

else if ($factor == 'H'){
	if($score == 0){
		return array('H',1);
	}
	else if($score>= 1 and $score<=2){
		return array('H',2);
	}
	else if($score>= 3 and $score<=5){
		return array('H',3);
	}
	else if($score>= 6 and $score<=9){
		return array('H',4);
	}
	else if($score>= 10 and $score<=13){
		return array('H',5);
	}
	else if($score>= 14 and $score<=16){
		return array('H',6);
	}
	else if($score>= 17 and $score<=18){
		return array('H',7);
	}
	else if($score>= 19 and $score<=20){
		return array('H',8);
	}
	
	}
	
else if ($factor == 'I'){
	if($score <=2){
		return array('I',1);
	}
	else if($score>= 3 and $score<=5){
		return array('I',2);
	}
	else if($score>= 6 and $score<=7){
		return array('I',3);
	}
	else if($score>= 8 and $score<=9){
		return array('I',4);
	}
	else if($score>= 10 and $score<=12){
		return array('I',5);
	}
	else if($score>= 13 and $score<=15){
		return array('I',6);
	}
	else if($score>= 16 and $score<=17){
		return array('I',7);
	}
	else if($score>= 18 and $score<=19){
		return array('I',8);
	}
	else if($score>= 20 and $score<=21){
		return array('I',9);
	}
	else if($score==22){
		return array('I',10);
	}

	
	}

else if ($factor == 'L'){
	if($score <=3){
		return array('L',1);
	}
	else if($score>= 4 and $score<=5){
		return array('L',2);
	}
	else if($score>= 6 and $score<=7){
		return array('L',3);
	}
	else if($score>= 8 and $score<=9){
		return array('L',4);
	}
	else if($score>= 10 and $score<=11){
		return array('L',5);
	}
	else if($score>= 12 and $score<=14){
		return array('L',6);
	}
	else if($score>= 15 and $score<=16){
		return array('L',7);
	}
	else if($score>= 17 and $score<=18){
		return array('L',8);
	}
	else if($score>= 19 and $score<=20){
		return array('L',9);
	}
	
	}
else if ($factor == 'M'){
	if($score ==0){
		return array('M',1);
	}
	else if($score ==1){
		return array('M',2);
	}
	else if($score>= 2 and $score<=3){
		return array('M',3);
	}
	else if($score==4){
		return array('M',4);
	}
	else if($score>= 5 and $score<=7){
		return array('M',5);
	}
	else if($score>= 8 and $score<=10){
		return array('M',6);
	}
	else if($score>= 11 and $score<=12){
		return array('M',7);
	}
	else if($score>= 13 and $score<=15){
		return array('M',8);
	}
	else if($score>= 16 and $score<=17){
		return array('M',9);
	}
	else if($score>= 18 and $score<=22){
		return array('M',10);
	}
	
	}
else if ($factor == 'N'){
	if($score <=1){
		return array('N',1);
	}
	else if($score>= 2 and $score<=3){
		return array('N',2);
	}
	else if($score>= 4 and $score<=5){
		return array('N',3);
	}
	else if($score>= 6 and $score<=7){
		return array('N',4);
	}
	else if($score>= 8 and $score<=10){
		return array('N',5);
	}
	else if($score>= 11 and $score<=13){
		return array('N',6);
	}
	else if($score>= 14 and $score<=15){
		return array('N',7);
	}
	else if($score>= 16 and $score<=17){
		return array('N',8);
	}
	else if($score>= 18 and $score<=19){
		return array('N',9);
	}
	else if($score==20){
		return array('N',10);
	}
	
	}

else if ($factor == 'O'){
	if($score <=1){
		return array('O',1);
	}
	else if($score>= 2 and $score<=3){
		return array('O',2);
	}
	else if($score>= 4 and $score<=6){
		return array('O',3);
	}
	else if($score>= 7 and $score<=8){
		return array('O',4);
	}
	else if($score>= 9 and $score<=11){
		return array('O',5);
	}
	else if($score>= 12 and $score<=14){
		return array('O',6);
	}
	else if($score>= 15 and $score<=16){
		return array('O',7);
	}
	else if($score>= 17 and $score<=18){
		return array('O',8);
	}
	else if($score>= 19 and $score<=20){
		return array('O',9);
	}
	
	}

else if ($factor == 'Q1'){
	if($score <=6){
		return array('Q1',1);
	}
	else if($score>= 7 and $score<=9){
		return array('Q1',2);
	}
	else if($score>= 10 and $score<=12){
		return array('Q1',3);
	}
	else if($score>= 13 and $score<=15){
		return array('Q1',4);
	}
	else if($score>= 16 and $score<=17){
		return array('Q1',5);
	}
	else if($score>= 18 and $score<=19){
		return array('Q1',6);
	}
	else if($score>= 20 and $score<=21){
		return array('Q1',7);
	}
	else if($score>= 22 and $score<=23){
		return array('Q1',8);
	}
	else if($score>= 24 and $score<=25){
		return array('Q1',9);
	}
	else if($score>= 26 and $score<=28){
		return array('Q1',10);
	}
	
	}

else if ($factor == 'Q2'){
	if($score ==0){
		return array('Q2',1);
	}
	else if($score>= 1 and $score<=2){
		return array('Q2',2);
	}
	else if($score>= 3 and $score<=4){
		return array('Q2',3);
	}
	else if($score>= 5 and $score<=6){
		return array('Q2',4);
	}
	else if($score>= 7 and $score<=9){
		return array('Q2',5);
	}
	else if($score>= 10 and $score<=12){
		return array('Q2',6);
	}
	else if($score>= 13 and $score<=15){
		return array('Q2',7);
	}
	else if($score== 16){
		return array('Q2',8);
	}
	else if($score>= 17 and $score<=20){
		return array('Q2',9);
	}
	
	}
else if ($factor == 'Q3'){
	if($score <=4){
		return array('Q3',1);
	}
	else if($score>= 5 and $score<=7){
		return array('Q3',2);
	}
	else if($score>= 8 and $score<=10){
		return array('Q3',3);
	}
	else if($score>= 11 and $score<=13){
		return array('Q3',4);
	}
	else if($score>= 14 and $score<=15){
		return array('Q3',5);
	}
	else if($score>= 16 and $score<=17){
		return array('Q3',6);
	}
	else if($score== 18){
		return array('Q3',7);
	}
	else if($score== 19){
		return array('Q3',8);
	}
	else if($score== 20){
		return array('Q3',9);
	}
	
	}
else if ($factor == 'Q4'){
	if($score ==0){
		return array('Q4',1);
	}
	else if($score>= 1 and $score<=2){
		return array('Q4',2);
	}
	else if($score>= 3 and $score<=4){
		return array('Q4',3);
	}
	else if($score>= 5 and $score<=6){
		return array('Q4',4);
	}
	else if($score>= 7 and $score<=8){
		return array('Q4',5);
	}
	else if($score>= 9 and $score<=12){
		return array('Q4',6);
	}
	else if($score>= 13 and $score<=14){
		return array('Q4',7);
	}
	else if($score>= 15 and $score<=16){
		return array('Q4',8);
	}
	else if($score>= 17 and $score<=18){
		return array('Q4',9);
	}
else if($score>= 19 and $score<=20){
		return array('Q4',10);
	}
	
	}
}
//##############################################################################
//get primary factors
function get_primary_factors($stern){
	if($stern[0] == 'A'){
		if($stern[1]<4){
			return 'reserved';
		}
		else if($stern[1] > 7){
			return'warm';
		}
		else{
			return 'average';
		}
	}
	else if($stern[0] == 'B'){
		if($stern[1]<4){
			return 'contrete';
		}
		else if($stern[1] > 7){
			return'abstract';
		}
		else{
			return 'average';
		}
			
	}
	else if($stern[0] == 'C'){
		if($stern[1]<4){
			return 'Reactive';
		}
		else if($stern[1]>7){
			return'Emotionally Stable';
		}
		else{
			return 'average';
		}
		
	}
	else if($stern[0] == 'E'){
		if($stern[1]<4){
			return 'Deferential';
		}
		else if($stern[1]>7){
			return'Dominant';
		}
		else{
			return 'average';
		}
				
	}
	
	else if($stern[0] == 'F'){
		if($stern[1]<4){
			return 'Serious';
		}
		else if($stern[1]>7){
			return'Lively, Animated';
		}
		else{
			return 'average';
		}
			
	}

	else if($stern[0] == 'G'){
		if($stern[1]<4){
			return 'Expedient';
		}
		else if($stern[1]>7){
			return'Rule-Conscious';
		}
		else{
			return 'average';
		}
				
	}
	
	else if($stern[0] == 'H'){
		if($stern[1]<4){
			return 'Shy';
		}
		else if($stern[1]>7){
			return'Socially Bold';
		}
		else{
			return 'average';
		}
					
	}

	else if($stern[0] == 'I'){
		if($stern[1]<4){
			return 'Utilitarian';
		}
		else if($stern[1]>7){
			return'Sensitive';
		}
		else{
			return 'average';
		}
			
	}

	else if($stern[0] == 'L'){
		if($stern[1]<4){
			return 'Trusting';
		}
		else if($stern[1]>7){
			return'Vigilant';
		}
		else{
			return 'average';
		}
			
	}

	else if($stern[0] == 'M'){
		if($stern[1]<4){
			return 'Grounded';
		}
		else if($stern[1]>7){
			return'Abstracted';
		}
		else{
			return 'average';
		}
					
	}

	else if($stern[0] == 'N'){
		if($stern[1]<4){
			return 'Forthright';
		}
		else if($stern[1]>7){
			return'Private';
		}
		else{
			return 'average';
		}
					
	}

	else if($stern[0] == 'O'){
		if($stern[1]<4){
			return 'Self-Assured';
		}
		else if($stern[1]>7){
			return'Apprehensive';
		}
		else{
			return 'average';
		}
					
	}
	
	else if($stern[0] == 'Q1'){
		if($stern[1]<4){
			return 'Traditional';
		}
		else if($stern[1]>7){
			return'Open to Change';
		}
		else{
			return 'average';
		}
					
	}

	else if($stern[0] == 'Q2'){
		if($stern[1]<4){
			return 'Group-Oriented';
		}
		else if($stern[1]>7){
			return'Self-Reliant';
		}
		else{
			return 'average';
		}
					
	}
	else if($stern[0] == 'Q3'){
		if($stern[1]<4){
			return 'Tolerates Disorder';
		}
		else if($stern[1]>7){
			return'Perfectionistic';
		}
		else{
			return 'average';
		}
					
	}
	else if($stern[0] == 'Q4'){
		if($stern[1]<4){
			return 'Relaxed';
		}
		else if($stern[1]>7){
			return'Tense';
		}
		else{
			return 'average';
		}
					
	}

}


//##############################################################################
//get global factors
//#############################################################################
?>
