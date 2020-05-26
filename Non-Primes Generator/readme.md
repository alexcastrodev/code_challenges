#Non-Primes Generator

<div class="ps-content-wrapper-v0">
<div class="preheader">Given k, print the first k non-prime positive integers</div>

<p>Given an integer <em>k</em>, print the first <em>k</em> non-prime positive integers, each on a new line. For example, if <em>k = 10</em>, the output would be:</p>

<pre>
1
4
6
8
9
10
12
14
15
16
</pre>

<p> </p>

<p><strong>Function Description </strong></p>

<p>Complete the function <em>manipulate_generator</em> in the editor below. The function must manipulate the generator function so that the first <em>k</em> non-prime positive integers are printed, each on a separate line.</p>

<p> </p>

<p>manipulate_generator has the following parameter(s):</p>

<p>    <em>g:</em>  a generator</p>

<p>    <em>n</em>: an integer</p>

<p> </p>

<p class="section-title">Constraints</p>

<ul>
	<li>1 ≤ <em>k</em> ≤ 10<sup>5</sup>  </li>
</ul>

<p> </p>
<!--       <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>Input from stdin will be processed as follows and passed to the function.</p>

<p> </p>

<p>The only line contains a single integer <em>k, </em>the number of non-primes to print.</p>
</div>
</details>
<!--        </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input 0</p>

<pre>
STDIN        Function 
-----        --------
12        →  integer k = 12</pre>

<p class="section-title">Sample Output 0</p>

<pre>
1
4
6
8
9
10
12
14
15
16
18
20

</pre>

<p class="section-title">Explanation 0</p>

<p>The output contains the first <em>12</em> non-prime positive integers.</p>