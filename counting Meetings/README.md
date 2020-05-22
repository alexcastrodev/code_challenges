Meetup Schedule 

<p>A start-up owner is looking to meet new investors to get some funds for his company. Each investor has a tight schedule that the owner has to respect. Given the schedules of the days investors are available, determine how many meetings the owner can schedule. Note that the owner can only have one meeting per day.</p>

<p>The schedules consists of two integer arrays, <em>firstDay</em> and <em>lastDay</em>. Each element in the array <em>firstDay</em> represents the first day an investor is available, and each element in <em>lastDay</em> represents the last day an investor is available, both inclusive.</p>

<p><strong>Example:</strong></p>

<p><em>firstDay = [1,2,3,3,3]</em></p>

<p><em>lastDay= [2,2,3,4,4]</em></p>

<p> </p>

<ul>
	<li>There are 5 investors [I-0, I-1, I-2, I-3, I-4]</li>
	<li>The investor I-0 is available from day 1 to day 2 inclusive [1, 2]</li>
	<li>The investor I-1 is available in day 2 only [2, 2]. The investor I-2 is available in day 3 only [3, 3]</li>
	<li>The investors I-3 and I-4 are available from day 3 to day 4 only [3, 4]</li>
	<li>The owner can only meet 4 investors out of 5 : I-0 in day 1, I-1 in day 2, I-2 in day 3 and I-3 in day 4. The graphic below shows the scheduled meetings in green and blocked days are in gray.</li>
</ul>

<p><img height="250" src="https://hrcdn.net/s3_pub/istreet-assets/Xlry6JXhG4lJ63Wr3quMoA/meetup%20schedule-1.svg" width="508"></p>
 

<p class="section-title">Function Description</p>

<p>Complete the function <em>countMeetings</em> in the editor below.</p>

<p> </p>

<p>countMeetings has the following parameters:</p>

<p>    <em>int firstDay[n]:</em>  an array of integers where the value of each element <em>firstDay[i]</em> is the first day the <em>i<sup>-th</sup></em> investor is available to meet.</p>

<p>    <em>int lastDay[n]</em>:  an array of integers where the value of each element <em>lastDay[i]</em> is the last day the <em>i<sup>th</sup></em> investor is available to meet.</p>

<p>Returns:</p>

<p>    <em>int:</em> an integer that represents the maximum number of meetings possible.</p>

<ul>
	<li><em>1 ≤ n ≤ 10<sup>5</sup></em></li>
	<li>
<em>1 ≤ firstDay[i], lastDay[i] ≤ 10<sup>5</sup></em> (where <em>0 ≤ i &lt; n</em>)</li>
	<li>
<em>firstDay[i]  ≤ lastDay[i]</em> (where <em>0 ≤ i &lt; n</em>)</li>
</ul>


Input Format For Custom Testing

<p>The first line contains an integer, <em>n</em>, that denotes the number of elements in <em>firstDay</em><i>.</i></p>

<p>Each line <em>i</em> of the <em>n</em> subsequent lines (where <em>0 ≤ i &lt; n</em>) contains an integer that describes <em>firstDay[i]</em>.</p>

<p>The next line contains the integer, n, that denotes the number of elements in <em>lastDay</em>.</p>

<p>Each line <em>i</em> of the <em>n</em> subsequent lines (where <em>0 ≤ i &lt; n</em>) contains an integer that describes <em>lastDay[i]</em><sub>i</sub>.</p>
</div>
</details>

Sample Case 0

<p class="section-title">Sample Input For Custom Testing</p>

<pre>
STDIN     Function
-----     --------
3    →    firstDay[] size n = 3
1    →    firstDay= [1, 1, 2] 
1
2
3    →    lastDay[] size n = 3
1    →    lastDay = [1, 2, 2]
2
2</pre>

<p class="section-title">Sample Output</p>

<pre>
2</pre>

<p class="section-title">Explanation</p>

<ul>
	<li>There are 3 investors [I-0, I-1, I-2]</li>
	<li>The investor I-0 is available in day 1 inclusive : [1, 1]</li>
	<li>The investor I-1 is available from day 1 to day 2  : [1, 2]</li>
	<li>The investors I-2 is available in day 2 :  [2, 2]</li>
	<li>The owner can only meet 2 investors out of 3 : I-0 in day 1, I-2 in day 2. The graphic below shows the scheduled meetings in green and blocked days are in gray.</li>
</ul>

<p><img height="200" src="https://hrcdn.net/s3_pub/istreet-assets/BQ_W6L5QTft1fuVVfNauaw/meetup%20schedule1.svg" width="382"></p>

<p> </p>

<p> </p>
</div>
</details>

<details><summary class="section-title">Sample Case 1</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<pre>
STDIN     Function
-----     --------
5    →    firstDay[] size n = 5
1    →    firstDay = [1, 2, 1, 2, 2]
2
1
2
2
5    →    lastDay[] size n = 5
3    →    lastDay = [3, 2, 1, 3, 3]
2
1
3
3</pre>

<p class="section-title">Sample Output</p>

<pre>
3</pre>

<p class="section-title">Explanation</p>

<ul>
	<li>There are 5 investors [I-0, I-1, I-2, I-3, I-4]</li>
	<li>The investor I-0 is available from day 1 to day 3 : [1, 3]</li>
	<li>The investors I-1 is available in day 2 :  [2, 2]</li>
	<li>The investors I-2 is available in day 1 :  [1, 1]</li>
	<li>The investors I-3  and I-4  are  available from day 2 to day 3  : [2, 3]</li>
	<li>The owner can only meet 3 investors out of 5 : I-0 in day 3, I-1 in day 2 and  I-2 in day 1. The graphic below shows the scheduled meetings in green and blocked days are in gray.</li>
</ul>

<p><img height="250" src="https://hrcdn.net/s3_pub/istreet-assets/tQpV7ijwI7wlY6OLmOcpPA/meetup%20schedule2.svg" width="434"></p>