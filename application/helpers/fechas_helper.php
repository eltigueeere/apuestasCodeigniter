<?php
     function fecha(){
        return $fecha['fech'] = date('Y-m-d H:i:s');
    }
    function hora(){
        return $hora['hr'] = date('H:i');
    }

    function dia(){
        return $dia['dia'] = date('d');
    }

    function mes(){
        return $mes['mes'] = date('m');
    }

    function year(){
        return $year['year'] = date('Y');
    }
?>
