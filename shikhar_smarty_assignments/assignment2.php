<?php
    require_once('../smarty-3.1.30/libs/Smarty.class.php');
    $smarty = new Smarty();
    $users = array(
            1 => array(
            'id' => '00AC',
            'name' => 'john',
            'pre' => '45',
            'post' => '85',
               ),
            2 => array(
            'id' => '00XV',
            'name' => 'brad',
            'pre' => '50',
            'post' => '90',
               ),
            3 => array(
            'id' => '00UY',
            'name' => 'swati',
            'pre' => '70',
            'post' => '80',
                ),
            4 => array(
            'id' => '002VC',
            'name' => 'smith',
            'pre' => '95',
            'post' => '50',
                ),
            5 => array(
            'id' => '00RK',
            'name' => 'crystal',
            'pre' => '75',
            'post' => '90',
               ),
            6 => array(
            'id' => '00PC',
            'name' => 'virat',
            'pre' => '85',
            'post' => '65',
                ),
        );     
    $smarty -> left_delimiter = '<{';
    $smarty -> right_delimiter = '}>';
    $smarty -> assign('name', 'Shikhar');
    $smarty -> assign('table', $users);    
    echo $smarty -> fetch('assignment2.tpl');
?>
