<!DOCTYPE html>
<html>
    <head>
        <title>Assignment1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <div class="container">
            <h1>Hello {$name},</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>S/N</th>
                        {foreach $table.1 as $a => $b}
                            <th>{$a|upper}</th>
                        {/foreach}                                                                                
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$table key=$key item=$val name=counter}
                        <tr>
                            <td>{$smarty.foreach.counter.iteration}</td>
                            {foreach from=$val key=    $a item=$b}
                                <td>{if $a eq 'name'}{$b|capitalize}{else if $a eq 'email'}{$b|lower}{else}{$b}{/if}</td>        
                            {/foreach}
                        </tr>                        
                    {/foreach}
                </tbody>
            </table>
        </div>
        <pre>
            &lt;div class="container"&gt;
                &lt;h1&gt;Hello {$name},&lt;/h1&gt;
                &lt;table class="table"&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th&gt;S/N&lt;/th&gt;
                            {foreach $table.1 as $a =&gt; $b}
                                &lt;th&gt;{$a|upper}&lt;/th&gt;
                            {/foreach}                                                                                
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                        {foreach from=$table key=$key item=$val name=counter}
                            &lt;tr&gt;
                                &lt;td&gt;{$smarty.foreach.counter.iteration}&lt;/td&gt;
                                {foreach from=$val key=    $a item=$b}
                                    &lt;td&gt;{if $a eq 'name'}{$b|capitalize}{else if $a eq 'email'}{$b|lower}{else}{$b}{/if}&lt;/td&gt;        
                                {/foreach}
                            &lt;/tr&gt;                        
                        {/foreach}
                    &lt;/tbody&gt;
                &lt;/table&gt;
            &lt;/div&gt;            
        </pre>
    </body>
</html>
