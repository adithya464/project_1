<?php
function word_limiter( $text, $limit = 30, $chars = '0123456789' ) {
    if( strlen( $text ) > $limit ) {
        $words = str_word_count( $text, 2, $chars );
        $words = array_reverse( $words, TRUE );
        foreach( $words as $length => $word ) {
            if( $length + strlen( $word ) >= $limit ) {
                array_shift( $words );
            } else {
                break;
            }
        }
        $words = array_reverse( $words );
        $text = implode( " ", $words ) . '&hellip;';
    }
    return $text;
}

$str = "Hello this is a list of words that is too long";
echo '</br>1: ' . word_limiter( $str );
$str = "When I conisider how my light is spent ere half my days in this";
echo '</br>2: ' . word_limiter( $str );
?>