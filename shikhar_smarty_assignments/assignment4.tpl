<!DOCTYPE html>
<html>
    <head>
        <title>Assignment4</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
		<div class="container">
			<h1>Hello <{$name}>,</h1>
			<table class="table">
				<thead>
					<tr>
						<th>S/N</th>
						<{foreach $table.1 as $a => $b}>
		                    <th><{$a|upper}></th>
                        <{/foreach}>                                                                                
                    </tr>
                </thead>
                <tbody>
                    <{foreach from=$table key=$key item=$val name=counter}>
                        <tr>
                            <td><{$smarty.foreach.counter.iteration}></td>
                            <{foreach from=$val key=    $a item=$b}>
                                <td>
                                    <{if $a eq 'name'}>
                                        <{$b|capitalize}>
                                    <{else if $a eq 'email'}>
                                        <{$b|lower}>
                                    <{else if $a eq 'dob'}>
                                        <{$b|date_format:$config.format_one}>
                                    <{else if $a eq 'doj'}>
                                        <{$b|date_format:$config.format_two}>
                                    <{else}>
                                        <{$b}>
                                    <{/if}>
                                </td>
                            <{/foreach}>
                        </tr>                        
                    <{/foreach}>
                </tbody>
            </table>
        </div>
        <pre>
            &lt;div class="container"&gt;
                &lt;h1&gt;Hello &lt;{$name}&gt;,&lt;/h1&gt;
                &lt;table class="table"&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th&gt;S/N&lt;/th&gt;
                            &lt;{foreach $table.1 as $a =&gt; $b}&gt;
                                &lt;th&gt;&lt;{$a|upper}&gt;&lt;/th&gt;
                            &lt;{/foreach}&gt;                                                                                
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                        &lt;{foreach from=$table key=$key item=$val name=counter}&gt;
                            &lt;tr&gt;
                                &lt;td&gt;&lt;{$smarty.foreach.counter.iteration}&gt;&lt;/td&gt;
                                &lt;{foreach from=$val key=    $a item=$b}&gt;
                                    &lt;td&gt;
                                        &lt;{if $a eq 'name'}&gt;
                                            &lt;{$b|capitalize}&gt;
                                        &lt;{else if $a eq 'email'}&gt;
                                            &lt;{$b|lower}&gt;
                                        &lt;{else if $a eq 'dob'}&gt;
                                            &lt;{$b|date_format:$config.format_one}&gt;
                                        &lt;{else if $a eq 'doj'}&gt;
                                            &lt;{$b|date_format:$config.format_two}&gt;
                                        &lt;{else}&gt;
                                            &lt;{$b}&gt;
                                        &lt;{/if}&gt;
                                    &lt;/td&gt;
                                &lt;{/foreach}&gt;
                            &lt;/tr&gt;                        
                        &lt;{/foreach}&gt;
                    &lt;/tbody&gt;
                &lt;/table&gt;
            &lt;/div&gt;
        </pre>
    </body>
</html>