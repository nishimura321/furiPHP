<?php
var_dump( "入力せよ" );
$msg = fgets( STDIN );
var_dump( $msg );
?>

<?php
var_dump( "入力せよ" );
$msg = trim( fgets(STDIN) );
var_dump( "入力したのは" . $msg );
?>