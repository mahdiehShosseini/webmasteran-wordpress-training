<?php
$student          = new stdClass;
$student->name = 'mahdieh';
$student->mathscore  = '20';
$student->historyscore  = '18.5'.'<br>';
$arr[0]       = $student;

$student          = new stdClass;
$student->name = 'zeinab';
$student->mathscore  = '18';
$student->historyscore  = '16'.'<br>';
$arr[1]       = $student;

$student          = new stdClass;
$student->name = 'mamad';
$student->mathscore  = '15';
$student->historyscore  = '19'.'<br>';
$arr[2]       = $student;

$student          = new stdClass;
$student->name = 'taha';
$student->mathscore  = '0.25';
$student->historyscore  = '16'.'<br>';
$arr[3]       = $student;

$student          = new stdClass;
$student->name = 'kosar';
$student->mathscore  = '19.75';
$student->historyscore  = '20'.'<br>';
$arr[4]       = $student;

$student          = new stdClass;
$student->name = 'sahar';
$student->mathscore  = '15.5';
$student->historyscore  = '19'.'<br>';
$arr[5]       = $student;

$student          = new stdClass;
$student->name = 'batool';
$student->mathscore  = '10';
$student->historyscore  = '14'.'<br>';
$arr[6]       = $student;

$student          = new stdClass;
$student->name = 'asghar';
$student->mathscore  = '17';
$student->historyscore  = '17'.'<br>';
$arr[7]       = $student;

$student          = new stdClass;
$student->name = 'sedigheh';
$student->mathscore  = '20';
$student->historyscore  = '20'.'<br>';
$arr[8]       = $student;

$student          = new stdClass;
$student->name = 'ebi';
$student->mathscore  = '8';
$student->historyscore  = '12'.'<br>';
$arr[9]       = $student;

$student          = new stdClass;
$student->name = 'ashraf';
$student->mathscore  = '17.5';
$student->historyscore  = '18'.'<br>';
$arr[10]       = $student;

function sort_name_asc( $a, $b ) {
    return ( $a->name < $b->name ) ? - 1 : 1;
}
usort( $arr, 'sort_name_asc' );
echo PHP_EOL . "SORTED BY NAME: " . PHP_EOL;
echo '<br>';
var_dump( $arr );
echo '<hr>';

function sort_math_asc( $a, $b ) {
    return ( $a->mathscore < $b->mathscore) ? - 1 : 1;
}
usort( $arr, 'sort_math_asc' );
echo PHP_EOL . "SORTED BY MATHSCORE: " . PHP_EOL;
echo '<br>';
var_dump( $arr );
echo '<hr>';

function sort_history_dec( $a, $b ) {
    return ( $a->historyscore > $b->historyscore ) ? - 1 : 1;
}
usort( $arr, 'sort_history_dec' );
echo PHP_EOL . "DESCENDING SORTED BY HISTORY: " . PHP_EOL;
echo '<br>';
var_dump( $arr );
echo '<hr>';
?>
