<?php
	echo 'test processing...';
    
    if( isset($_GET['test']) ){
        echo 'GET[\'test\'] = ' . $_GET['test'];
    }
    
    echo 'test completed...';
?>