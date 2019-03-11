<?php
//use big data detail
$data = (new yii\db\Query())->from('x2_question_library')->orderBy('id');
foreach($data->batch(100) as $k => $v){
    var_dump($v);
}


?>
