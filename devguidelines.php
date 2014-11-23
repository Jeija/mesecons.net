<?php include "header.html";?>

<div id = "article">
	<div class = "article-heading">Development Guidelines</div>
	<div class = "text">
	Make sure you follow these guidelines to get your own code merged for sure!<br/>
	If you are not sure if your code complies, just send it in; we'll tell you in case it doesn't.
	<div class = "paragraph-heading">Code</div>
	<div class = "code"><pre>
-- do_something_one(foo) --> Makes xyz
-- do_something_two(foo) --> Makes zxy; foo is a table that contains yxz
local do_something_one = function(foo) *
	local bar = {} *
	for n, f in ipairs(foo) do
		if (foo == 5) then
			return foo
		else
			bar.x  = f **
			bar[n] = f **
			table.insert(bar, f)
			print("test")
		end
	end
6*
	for _, b in pairs(bar) do
		print(dump(f))
	end
end
6*

register_something("foo", function(foo, bar) ***
	if not foo then return end ****
	if (foo == bar) then
		print("foo = bar")
	else
		do_something_one  (foo) 5*
		do_something_two  (foo) 5*
		do_something_tree (foo) 5*
		do_something__with_a_ver_long_name_and_long_parameter_list
			(foo, bar, "1", 2, "3", 4) 7*
	end
end)
</pre></div><br/>

	There you go, that is some reference code for the coding style.<br/>
	* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;Make sure functions and variables that don't need to be public are defined local<br/>
	**  &nbsp;&nbsp;&nbsp;&nbsp;= &nbsp;To modify an array member by its index, preferably use bar.foo, not bar["foo"] if not required<br/>
	***  &nbsp;&nbsp;= &nbsp;Define functions inside registrations; Makes things clearer, you know which function belongs to which registration<br/>
	**** = &nbsp;You can put simple if constructions in one line only or use one line if the ifs do the same thing over and over again.<br/>
	5*  &nbsp;&nbsp;&nbsp; = &nbsp;If you use functions with similar parameters, it looks better to make it like the parameters are in a vertical line.<br/>
	6* &nbsp;&nbsp;&nbsp;  = &nbsp;Make spaces and empty lines between functions and inside functions for segments<br/>
	7* &nbsp;&nbsp;&nbsp;  =&nbsp; If a line becomes very long, try to split it. Try not to use more than 100 chars per line.<br/><br/>
	<b>Random</b>
	<li>Use tabs, no spaces</li>
	<li>Don't use too many comments, you can describe something at the head of your code</li>
	<li>You can use the sample code above also for other things (e.g. shows where to make spaces)</li><br/>
	<div class = "paragraph-heading">GitHub</div>
	<li>Use GitHub to send in your code. Git is not too hard!</li>
	<li>You can send incomplete pull requests, but explain what is missing</li>
	<li>Describe your pull request, what it does and what does not work!</li>
	<li>You may also provide screenshots if you implement new features</li>
	<li>If you implement new features, you should also send in an update for mesecons.net <a href="https://github.com/Jeija/mesecons.net">here</a>
	</div>
</div>

<?php include "footer.html";?>
