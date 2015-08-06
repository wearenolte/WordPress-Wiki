<?php

if( class_exists('Parsedown') ){
	$Parsedown = new Parsedown();
	$content = $Parsedown->text( $content );
}
printf('%s', $content);
