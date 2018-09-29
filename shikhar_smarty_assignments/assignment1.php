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
    $smarty -> assign('name', 'Shikhar');
    $smarty -> assign('table', $users);
    echo $smarty -> fetch('assignment1.tpl');
?>
<pre>
    &lt;?php
        require_once('../smarty-3.1.30/libs/Smarty.class.php');
        $smarty = new Smarty();        
        $users = array(
                1 =&gt; array(
                'id' =&gt; '00AC',
                'name' =&gt; 'john',
                'address' =&gt; 'California',
                'email' =&gt; 'JOHn@yAhOO.com',
                'dob' =&gt; '1989/10/06',
                'doj' =&gt; '2014/12/04'
                   ),
                2 =&gt; array(
                'id' =&gt; '00XV',
                'name' =&gt; 'brad',
                'address' =&gt; 'Washington',
                'email' =&gt; 'bRAd@gmail.com',
                'dob' =&gt; '1980/09/23',
                'doj' =&gt; '2005/03/10'
                   ),
                3 =&gt; array(
                'id' =&gt; '00UY',
                'name' =&gt; 'swati',
                'address' =&gt; 'Mutthiganj',
                'email' =&gt; 'SWAti@yahoo.com',
                'dob' =&gt; '1990/05/04',
                'doj' =&gt; '2013/01/02'
                   ),
                4 =&gt; array(
                'id' =&gt; '002VC',
                'name' =&gt; 'smith',
                'address' =&gt; 'California',
                'email' =&gt; 'SMITH@yahoo.com',
                'dob' =&gt; '1989/10/22',
                'doj' =&gt; '2013/07/15'
                   ),
                5 =&gt; array(
                'id' =&gt; '00RK',
                'name' =&gt; 'crystal',
                'address' =&gt; 'New York',
                'email' =&gt; 'crystal@GMAIL.com',
                'dob' =&gt; '1991/05/28',
                'doj' =&gt; '2015/01/15'
                   ),
                6 =&gt; array(
                'id' =&gt; '00PC',
                'name' =&gt; 'virat',
                'address' =&gt; 'Vadodara',
                'email' =&gt; 'VIraT@Yahoo.com',
                'dob' =&gt; '1989/01/24',
                'doj' =&gt; '2013/04/01'
                   ),
                );     
        $smarty -&gt; assign('name', 'Shikhar');
        $smarty -&gt; assign('table', $users);
        echo $smarty -&gt; fetch('assignment1.tpl');
    ?&gt;
</pre>