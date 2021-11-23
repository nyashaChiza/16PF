<?php 
include('methods.php');
$conn = mysqli_connect("localhost","root","","epzgloba_jobportal");
$conn = mysqli_connect("localhost","root","","epzgloba_jobportal");
if(1){

$responses_sql ="SELECT * FROM `nontimed_answers` WHERE `cand_id`=1415 and `test_typ`= 22 ORDER BY `ques_no` ASC";

$responsesResult = mysqli_query($conn,$responses_sql);
$resp = array();
while($row = mysqli_fetch_assoc($responsesResult)){			
			$resp[$row['ques_no'].$row['for_part']]= $row['ans_weight'];
		}
//##############################################################################
// factors
$factor_A = array('1A'=>$resp['1A'],'31A'=>$resp['31A'],'33A'=>$resp['33A'],'63A'=>$resp['63A'],'65A'=>$resp['65A'],'96A'=>$resp['96A'],'98A'=>$resp['98A'],'127A'=>$resp['127A'],'129A'=>$resp['129A'],'159A'=>$resp['159A'],'161A'=>$resp['161A']);
$factor_B = array('171A'=>$resp['171A'],'172A'=>$resp['172A'],'173A'=>$resp['173A'],'174A'=>$resp['174A'],'175A'=>$resp['175A'],'176A'=>$resp['176A'],'177A'=>$resp['177A'],'178A'=>$resp['178A'],'179A'=>$resp['179A'],'180A'=>$resp['180A'],'181A'=>$resp['181A'],'182A'=>$resp['182A'],'183A'=>$resp['183A'],'184A'=>$resp['184A'],'185A'=>$resp['185A']);
$factor_C = array('2A'=>$resp['2A'],'32A'=>$resp['32A'],'35A'=>$resp['35A'],'64A'=>$resp['64A'],'67A'=>$resp['67A'],'97A'=>$resp['97A'],'128A'=>$resp['128A'],'131A'=>$resp['131A'],'160A'=>$resp['160A'],'162A'=>$resp['162A']);
$factor_E = array('3A'=>$resp['3A'],'36A'=>$resp['36A'],'38A'=>$resp['38A'],'66A'=>$resp['66A'],'99A'=>$resp['99A'],'102A'=>$resp['102A'],'130A'=>$resp['130A'],'132A'=>$resp['132A'],'163A'=>$resp['163A'],'165A'=>$resp['165A']);
$factor_F = array('4A'=>$resp['4A'],'6A'=>$resp['6A'],'37A'=>$resp['37A'],'39A'=>$resp['39A'],'68A'=>$resp['68A'],'70A'=>$resp['70A'],'100A'=>$resp['100A'],'103A'=>$resp['103A'],'134A'=>$resp['134A'],'164A'=>$resp['164A']);
$factor_G = array('5A'=>$resp['5A'],'7A'=>$resp['7A'],'40A'=>$resp['40A'],'69A'=>$resp['69A'],'72A'=>$resp['72A'],'104A'=>$resp['104A'],'106A'=>$resp['106A'],'133A'=>$resp['133A'],'136A'=>$resp['136A'],'166A'=>$resp['166A'],'168A'=>$resp['168A']);
$factor_H = array('9A'=>$resp['9A'],'41A'=>$resp['41A'],'71A'=>$resp['71A'],'73A'=>$resp['73A'],'105A'=>$resp['105A'],'107A'=>$resp['107A'],'135A'=>$resp['135A'],'137A'=>$resp['137A'],'167A'=>$resp['167A'],'169A'=>$resp['169A']);
$factor_I = array('8A'=>$resp['8A'],'42A'=>$resp['42A'],'44A'=>$resp['44A'],'74A'=>$resp['74A'],'77A'=>$resp['77A'],'108A'=>$resp['108A'],'110A'=>$resp['110A'],'138A'=>$resp['138A'],'140A'=>$resp['140A'],'170A'=>$resp['170A']);
$factor_L = array('11A'=>$resp['11A'],'13A'=>$resp['13A'],'43A'=>$resp['43A'],'45A'=>$resp['45A'],'76A'=>$resp['76A'],'78A'=>$resp['78A'],'109A'=>$resp['109A'],'112A'=>$resp['112A'],'139A'=>$resp['139A'],'141A'=>$resp['141A']);
$factor_M = array('12A'=>$resp['12A'],'14A'=>$resp['14A'],'17A'=>$resp['17A'],'46A'=>$resp['46A'],'49A'=>$resp['49A'],'79A'=>$resp['79A'],'81A'=>$resp['81A'],'111A'=>$resp['111A'],'114A'=>$resp['114A'],'142A'=>$resp['142A'],'145A'=>$resp['145A']);
$factor_N = array('15A'=>$resp['15A'],'18A'=>$resp['18A'],'47A'=>$resp['47A'],'50A'=>$resp['50A'],'80A'=>$resp['80A'],'84A'=>$resp['84A'],'113A'=>$resp['113A'],'117A'=>$resp['117A'],'143A'=>$resp['143A'],'148A'=>$resp['148A']);
$factor_O = array('19A'=>$resp['19A'],'21A'=>$resp['21A'],'51A'=>$resp['51A'],'54A'=>$resp['54A'],'82A'=>$resp['82A'],'87A'=>$resp['87A'],'116A'=>$resp['116A'],'119A'=>$resp['119A'],'146A'=>$resp['146A'],'150A'=>$resp['150A']);
$factor_Q1 = array('20A'=>$resp['20A'],'22A'=>$resp['22A'],'24A'=>$resp['24A'],'52A'=>$resp['52A'],'53A'=>$resp['53A'],'55A'=>$resp['55A'],'83A'=>$resp['83A'],'86A'=>$resp['86A'],'88A'=>$resp['88A'],'118A'=>$resp['118A'],'120A'=>$resp['120A'],'147A'=>$resp['147A'],'149A'=>$resp['149A'],'151A'=>$resp['151A']);
$factor_Q2 = array('25A'=>$resp['25A'],'27A'=>$resp['27A'],'58A'=>$resp['58A'],'59A'=>$resp['59A'],'92A'=>$resp['92A'],'121A'=>$resp['121A'],'123A'=>$resp['123A'],'152A'=>$resp['152A'],'156A'=>$resp['156A']);
$factor_Q3 = array('26A'=>$resp['26A'],'29A'=>$resp['29A'],'57A'=>$resp['57A'],'61A'=>$resp['61A'],'90A'=>$resp['90A'],'93A'=>$resp['93A'],'122A'=>$resp['122A'],'125A'=>$resp['125A'],'154A'=>$resp['154A'],'157A'=>$resp['157A']);
$factor_Q4 = array('28A'=>$resp['28A'],'30A'=>$resp['30A'],'60A'=>$resp['60A'],'62A'=>$resp['62A'],'91A'=>$resp['91A'],'94A'=>$resp['94A'],'124A'=>$resp['124A'],'126A'=>$resp['126A'],'155A'=>$resp['155A'],'158A'=>$resp['158A']);
$factor_IM = array('16A'=>$resp['16A'],'23A'=>$resp['23A'],'34A'=>$resp['34A'],'48A'=>$resp['48A'],'58A'=>$resp['58A'],'75A'=>$resp['75A'],'85A'=>$resp['85A'],'95A'=>$resp['95A'],'101A'=>$resp['101A'],'115A'=>$resp['115A'],'144A'=>$resp['144A'],'153A'=>$resp['153A']);
//##############################################################################

//global factors 
$extraversion = array('factor_A'=> get_stern('A', get_score_A($factor_A))[1],'factor_F'=> get_stern('F', get_score_F($factor_F))[1],'factor_H'=> get_stern('H', get_score_H($factor_H))[1],'factor_N'=> get_stern('N', get_score_N($factor_N))[1], 'factor_Q2'=> get_stern('Q2', get_score_Q2($factor_Q2))[1] );
$independence = array('factor_E'=> get_stern('E', get_score_E($factor_E))[1],'factor_H'=> get_stern('H', get_score_H($factor_H))[1],'factor_L'=> get_stern('L', get_score_L($factor_L))[1],'factor_Q1'=> get_stern('Q1', get_score_Q1($factor_Q1))[1] );
$anxiety = array('factor_C'=> get_stern('C', get_score_C($factor_C))[1],'factor_L'=> get_stern('L', get_score_L($factor_L))[1],'factor_O'=> get_stern('O', get_score_O($factor_O))[1],'factor_Q4'=> get_stern('Q4', get_score_Q4($factor_Q4))[1] );
$tough_mindedness = array('factor_A'=> get_stern('A', get_score_A($factor_A))[1],'factor_I'=> get_stern('I', get_score_I($factor_I))[1],'factor_M'=> get_stern('M', get_score_M($factor_M))[1],'factor_Q1'=> get_stern('Q1', get_score_Q1($factor_Q1))[1] );
$self_control = array('factor_G'=>get_stern('G', get_score_G($factor_G))[1],'factor_F'=> get_stern('F', get_score_F($factor_F))[1],'factor_M'=> get_stern('M', get_score_M($factor_M))[1],'factor_Q3'=> get_stern('Q3', get_score_Q3($factor_Q3))[1] );
//##############################################################################


echo 'Factor A: '.get_primary_factors(get_stern('A', get_score_A($factor_A))).'<br>';
echo 'stern A:'.get_stern('A', get_score_A($factor_A))[1].'<br>';
echo 'score A:'.get_score_A($factor_A).'<br>';
echo'----------------------<br>';

echo 'Factor B: '.get_primary_factors(get_stern('B', get_score_B($factor_B))).'<br>';
echo 'stern B:'.get_stern('B',get_score_B($factor_B))[1].'<br>';
echo 'score B:'.get_score_B($factor_B).'<br>';
echo'----------------------<br>';

echo 'Factor C: '.get_primary_factors(get_stern('C', get_score_C($factor_C))).'<br>';
echo 'stern C:'.get_stern('C',get_score_C($factor_C))[1].'<br>';
echo 'score C:'.get_score_C($factor_C).'<br>';
echo'----------------------<br>';

echo 'Factor E: '.get_primary_factors(get_stern('E', get_score_E($factor_E))).'<br>';
echo 'stern E:'.get_stern('E',get_score_E($factor_E))[1].'<br>';
echo 'score E:'.get_score_E($factor_E).'<br>';
echo'----------------------<br>';

echo 'Factor F: '.get_primary_factors(get_stern('F', get_score_F($factor_F))).'<br>';
echo 'stern F:'.get_stern('F',get_score_F($factor_F))[1].'<br>';
echo 'score F:'.get_score_F($factor_F).'<br>';
echo'----------------------<br>';

echo 'Factor G: '.get_primary_factors(get_stern('G', get_score_G($factor_G))).'<br>';
echo 'stern G:'.get_stern('G',get_score_G($factor_G))[1].'<br>';
echo 'score G:'.get_score_G($factor_G).'<br>';
echo'----------------------<br>';

echo 'Factor H: '.get_primary_factors(get_stern('H', get_score_H($factor_H))).'<br>';
echo 'stern H:'.get_stern('H',get_score_H($factor_H))[1].'<br>';
echo 'score H:'.get_score_H($factor_H).'<br>';
echo'----------------------<br>';

echo 'Factor I: '.get_primary_factors(get_stern('I', get_score_I($factor_I))).'<br>';
echo 'stern I:'.get_stern('I',get_score_I($factor_I))[1].'<br>';
echo 'score I:'.get_score_I($factor_I).'<br>';
echo'----------------------<br>';

echo 'Factor L: '.get_primary_factors(get_stern('L', get_score_L($factor_L))).'<br>';
echo 'stern L:'.get_stern('L',get_score_L($factor_L))[1].'<br>';
echo 'score L:'.get_score_L($factor_L).'<br>';
echo'----------------------<br>';

echo 'Factor M: '.get_primary_factors(get_stern('M', get_score_M($factor_M))).'<br>';
echo 'stern M:'.get_stern('M',get_score_M($factor_M))[1].'<br>';
echo 'score M:'.get_score_M($factor_M).'<br>';
echo'----------------------<br>';

echo 'Factor N: '.get_primary_factors(get_stern('N', get_score_N($factor_N))).'<br>';
echo 'stern N:'.get_stern('N',get_score_N($factor_N))[1].'<br>';
echo 'score N:'.get_score_N($factor_N).'<br>';
echo'----------------------<br>';

echo 'Factor O: '.get_primary_factors(get_stern('O', get_score_O($factor_O))).'<br>';
echo 'stern O:'.get_stern('O',get_score_O($factor_O))[1].'<br>';
echo 'score O:'.get_score_O($factor_O).'<br>';
echo'----------------------<br>';

echo 'Factor Q1: '.get_primary_factors(get_stern('Q1', get_score_Q1($factor_Q1))).'<br>';
echo 'stern Q1:'.get_stern('Q1',get_score_Q1($factor_Q1))[1].'<br>';
echo 'score Q1:'.get_score_Q1($factor_Q1).'<br>';
echo'----------------------<br>';

echo 'Factor Q2: '.get_primary_factors(get_stern('Q2', get_score_Q2($factor_Q2))).'<br>';
echo 'stern Q2:'.get_stern('Q2',get_score_Q2($factor_Q2))[1].'<br>';
echo 'score Q2:'.get_score_Q2($factor_Q2).'<br>';
echo'----------------------<br>';

echo 'Factor Q3: '.get_primary_factors(get_stern('Q3', get_score_Q3($factor_Q3))).'<br>';
echo 'stern Q3:'.get_stern('Q3',get_score_Q3($factor_Q3))[1].'<br>';
echo 'score Q3:'.get_score_Q3($factor_Q3).'<br>';
echo'----------------------<br>';

echo 'Factor Q4: '.get_primary_factors(get_stern('Q4', get_score_Q4($factor_Q4))).'<br>';
echo 'stern Q4:'.get_stern('Q4',get_score_Q4($factor_Q4))[1].'<br>';
echo 'score Q4:'.get_score_Q4($factor_Q4).'<br>';
echo'----------------------<br>';

//echo 'Factor IM: '.get_primary_factors(get_stern('Q4', get_score_Q4($factor_Q4))).'<br>';
//echo 'stern IM:'.get_stern('Q4',get_score_Q4($factor_Q4))[1].'<br>';
echo 'score IM:'.get_score_IM($factor_IM).'<br>';
echo'----------------------<br>';

echo '<h3>GLOBAL FACTORS</h3>';
echo 'Extrversion Factor:'.get_global_factor(get_global_stern('E',$extraversion)).'<br>';
echo 'Extrversion stern :'.get_global_stern('E',$extraversion)[1].'<br>';
echo'----------------------<br>';

echo 'Independence Factor:'.get_global_factor(get_global_stern('I',$independence)).'<br>';
echo 'Independence stern :'.get_global_stern('I',$independence)[1].'<br>';
echo'----------------------<br>';

echo 'Tough-Mindedness Factor:'.get_global_factor(get_global_stern('TM',$tough_mindedness)).'<br>';
echo 'Tough-Mindedness stern :'.get_global_stern('TM',$tough_mindedness)[1].'<br>';
echo'----------------------<br>';

echo 'Self-Control Factor:'.get_global_factor(get_global_stern('SC',$self_control)).'<br>';
echo 'Self-Control stern :'.get_global_stern('SC',$self_control)[1].'<br>';
echo'----------------------<br>';

echo 'Anxiety Factor:'.get_global_factor(get_global_stern('A',$anxiety)).'<br>';
echo 'Anxiety stern :'.get_global_stern('A',$anxiety)[1].'<br>';
echo'----------------------<br>';

}
?>

