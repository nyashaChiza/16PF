
<?php
use PhpOffice\PhpWord\Element\Chart;
use PhpOffice\PhpWord\Shared\Converter;
require 'vendor/autoload.php';
$path = $_SERVER['DOCUMENT_ROOT'];
include('index_test.php');
use PhpOffice\PhpWord\Element\Field;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;

// Template processor instance creation
echo date('H:i:s'), ' Creating new TemplateProcessor instance...';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('file/template1.docx');


$title = new TextRun();
$title->addText('This title has been set ', array('bold' => true, 'italic' => true, 'color' => 'blue'));
$title->addText('dynamically', array('bold' => true, 'italic' => true, 'color' => 'red', 'underline' => 'single'));
$templateProcessor->setComplexBlock('title', $title);

$inline = new TextRun();
$inline->addText('by a red italic text', array('italic' => true, 'color' => 'red'));
$templateProcessor->setComplexValue('inline', $inline);
$value = array('verbal Reasoning'=>5, 'Non verbal Reasoning'=>7,'Numerical Reasoning'=>3,'Clerical Reasoning'=>8);
$data = get_cognitive(644);
function get_comment($score){
	if($score<=3){
		return 'Below Average';
	}
	else if($score == 4){
		return 'Lower Average';
	}
	else if($score>4 and $score <7){
		return 'Average';
	}
	else if($score == 7){
		return 'Upper Average';
	}
	else if($score>7 and $score <11){
		return 'Above Average';
	}
}
function add_cognitive($title,$value,$per){

$table = new Table(array('borderSize' => 10, 'borderColor' => 'green', 'width' => 9700,'exactHeight'=>50, 'unit' => TblWidth::TWIP));
$table->addRow();
if($value == 1){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));
}
else if($value == 2){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 3){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 4){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 5){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 6){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 7){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 8){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 9){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('&#9830;');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}
else if($value == 10){
$table->addCell(250, array('width'=>400))->addText($title, array('size'=>10));
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FF0000'))->addText('');
$table->addCell(150, array('bgColor' => '#FFD966'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#FFFF11'))->addText('');
$table->addCell(150, array('bgColor' => '#C5E0B3'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('');
$table->addCell(150, array('bgColor' => '#00B050'))->addText('&#9830;');
$table->addCell(150)->addText($per);
$table->addCell(150)->addText(get_comment($value));

}

return $table;
	}

if(count(get_cognitive(644)) > 0){
	$count=1;
	foreach(get_cognitive(644) as $title => $data) {
	$templateProcessor->setComplexBlock('table'.$count, add_cognitive($title.'  ',$data['sten']+1,$data['percentile']+1));
	$count= $count+1;

	}
	for($i=$count;$i<10;$i++){
	$templateProcessor->cloneBlock('BLOCKTABLE'.$i, 0, true, true);
	//echo 'BLOCKTABLE'.$i.'<br>';
	}

}



//$categories = array('Strategic', 'Leadership', 'Planning & organising', 'Adaptability', 'Stakeholder','Acumen','Creativity','Teamwork','Focus','Negotiation');
$categories = array('Thinking ', 'Leadership', 'Planning', 'Adaptability', 'S.Management','B.Acumen','Creativity','Teamwork','Customer Focus','Negotiation');
$series1 = array(10, 30, 20, 55, 42,46,27,38,29);

//$series1 = array(1, 3, 2, 5, 4,9);

    $chart = new Chart('bar', $categories, $series1);
$chart->getStyle()->setShowAxisLabels(true);
    $chart->getStyle()
        ->setWidth(Converter::inchToEmu(7))
        ->setHeight(Converter::inchToEmu(4));
    $templateProcessor->setChart("chart0", $chart);
 

$field = new Field('DATE', array('dateformat' => 'dddd d MMMM yyyy H:mm:ss'), array('PreserveFormat'));
$templateProcessor->setComplexValue('field', $field);
$data = array('Nyasha Chizampeni','Software Developer','EPZ Global', date('Y/m/d'));
$fields = array('candidate_name','position','company','date_today');
$templateProcessor->setValue($fields, $data);
$comp = array('factor 1','factor 2','factor 3','factor 4','factor 5');
$compd = array('comp1','comp2','comp3','comp4','comp5');
$templateProcessor->setValue($compd, $comp);
// $link = new Link('https://github.com/PHPOffice/PHPWord');
// $templateProcessor->setComplexValue('link', $link);
$templateProcessor->deleteBlock('DELETEME');
echo date('H:i:s'), ' Saving the result document...';
$templateProcessor->saveAs('results/output.docx');

//echo getEndingNotes(array('Word2007' => 'docx'), 'results/Sample_40_TemplateSetComplexValue.docx');
?>