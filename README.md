<h1>DateMath</h1>
<p>DateMath is a PHP class which makes date manipulation simple.</p>

<h2>Usage</h2>

<pre><code>
$myDate = new DateMath('2011-01-01'); 		$myDate->addMonths(2)
	   ->addDays(3)
	   ->firstDayOfWeek();
echo $myDate->toString('Y-m-d');	
</code></pre>

<h3>Methods</h3>
<ul>
	<li>addSeconds($num)</li>
	<li>addMinutes($num)</li>
	<li>addHours($num)</li>
	<li>addDays($num)</li>
	<li>addMonths($num)</li>
	<li>addYears($num)</li>
	<li>addWeeks($num)</li>
	<li>firstDayOfWeek()</li>
	<li>firstDayOfMonth()</li>
	<li>lastDayOfMonth()</li>
	<li>lastDayOfWeek()</li>
	<li>toString($format = 'Y-m-d H:i:s')</li>
	<li>toGMTString($format = 'Y-m-d H:i:s')</li>
	<li>getTime()</li>
</ul>
