<?php

if( $_POST ){
	
	$fname = $_POST['txt_fname'];
	$sca = $_POST['scale'];
        
	if($sca == "celcius"){
            $out = ($fname -32) * (5/9);
        }
        if($sca == "fahrenheit"){
            $out = ($fname * (9/5))+32;
        }
            
            ?>
    
    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
            <strong>Successful</strong>, conversion to<strong></strong> <?php echo $sca ?>
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>
        <div class="alert alert-info"><?php echo $sca ?> value is : </div></td>
    <td>
        <div class="alert alert-info"><?php echo $out ?></div></td>
    </tr>
    
    
    </table>
    <?php
}