<?php
    require_once('../smarty-3.1.30/libs/Smarty.class.php');
    $smarty = new Smarty();        
    $users = array(
                1 => array(
                        'id' => '00AC',
                        'name' => 'john',
                        'address' => 'California',
                        'email' => 'JOHn@yAhOO.com',
                        'dob' => '1989/10/06',
                        'doj' => '2014/12/04'
                    ),
                2 => array(
                        'id' => '00XV',
                        'name' => 'brad',
                        'address' => 'Washington',
                        'email' => 'bRAd@gmail.com',
                        'dob' => '1980/09/23',
                        'doj' => '2005/03/10'
                ),
                3 => array(
                        'id' => '00UY',
                        'name' => 'swati',
                        'address' => 'Mutthiganj',
                        'email' => 'SWAti@yahoo.com',
                        'dob' => '1990/05/04',
                        'doj' => '2013/01/02'
                    ),
                4 => array(
                        'id' => '002VC',
                        'name' => 'smith',
                        'address' => 'California',
                        'email' => 'SMITH@yahoo.com',
                        'dob' => '1989/10/22',
                        'doj' => '2013/07/15'
                    ),
                5 => array(
                        'id' => '00RK',
                        'name' => 'crystal',
                        'address' => 'New York',
                        'email' => 'crystal@GMAIL.com',
                        'dob' => '1991/05/28',
                        'doj' => '2015/01/15'
                    ),
                6 => array(
                        'id' => '00PC',
                        'name' => 'virat',
                        'address' => 'Vadodara',
                        'email' => 'VIraT@Yahoo.com',
                        'dob' => '1989/01/24',
                        'doj' => '2013/04/01'
                    ),
                );

    $config = array(
        'format_one' => '%m/%d/%Y',
        'format_two' => '%d-%m-%y',
    );
    $smarty -> left_delimiter = '<{';    
    $smarty -> right_delimiter = '}>';    
    $smarty -> assign('name', 'Shikhar');
    $smarty -> assign('table', $users);
    $smarty -> assign('config', $config);
    $smarty -> assign('date', strtotime('now'));
    echo $smarty -> fetch('assignment4.tpl');
?>