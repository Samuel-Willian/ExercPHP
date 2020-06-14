<?php
    function bonus($dir = 100, $com = 10, $est = 1){
		
        $r = array(0 => ($dir/100)*20, 1 => ($com/100)*10, 2 => ($est/100)*5);
		
		
        echo "bonus do diretor $r[0]<br/> bonus do funcionario comum $r[1]<br/> bonus do estagiario $r[2]";
    } 
    bonus();
?>