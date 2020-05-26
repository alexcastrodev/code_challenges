#Python: Square Accumulate Root

<div class="ps-content-wrapper-v0">
<p>Arthur needs to perform 3 operations on an input - squaring a number, taking the square root of a number or sum of the input numbers. But the order of these operations is not known beforehand. Arthur realizes it to be a perfect situation to implement it using co-routines and producer-filter-consumer pattern.</p>

<p>Arthur has implemented the producer, consumer, and the pipeline and needs help to set up the accumulator (for summing the input), squarer (for squaring the input), and rooter (for taking the square root of a number) co-routines.</p>

<ul>
	<li>The accumulator should receive one number, should add that to the previously kept answer, and yield that answer. The accumulator starts at 0.</li>
	<li>The squarer should receive one number and yield the square of that number.</li>
	<li>The rooter should receive one number and yield the square root of that number. Note that you need to take the floor after doing the square root of the input.</li>
</ul>
 

<p>Take, for example, the order in which to implement these functions to be <em>order = [square, accumulate]</em> and the numbers to be <em>nums = [1, 2, 3]</em> with length <em>n = 3</em>. The complete function then is <em>accumulate(square(nums<sub>i</sub>))</em>. After the first number (1), the output is 1. After the second number (2), the output is 5. After the third number (3), the output is 14.</p>
 

<p class="section-title">Functions Description</p>

<p>Complete the co-routine <em>accumulator</em>, <em>squarer</em>, and <em>rooter</em> in the editor below.</p>

<p>These co-routines do not have any input and communicate completely through the sub-routine pipeline.</p>

<p> </p>

<p class="section-title">Constraints</p>

<ul>
	<li>1<em> ≤ n ≤ 10<sup>5</sup></em>
</li>
	<li>
<em>1 ≤ nums<sub>i</sub> ≤ 10<sup>5</sup> (</em>where<em> 0 ≤ i &lt; n)</em>
</li>
</ul>

<p> </p>
<!-- <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>The first line contains a string, <em>order</em>, describing the order in which to perform the operations.<br>
The next line contains an integer, <em>n</em>, denoting the number of elements in <em>nums</em>.<br>
Each line <em>i</em> of the <em>n</em> subsequent lines (where <em>0 ≤ i &lt; n</em>) contains an integer describing <em>nums<sub>i</sub></em>.</p>
</div>
</details>
<!-- </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<pre>
STDIN                     Function 
-----                     --------
[square, accumulate]    → string order = '[square, accumulate]'
3                       → integer n = 3 
1                       → nums[] = [ 1, 2, 3 ]
2
3</pre>

<p class="section-title">Sample Output</p>

<pre>
1
5
14</pre>

<p class="section-title">Explanation</p>

<p>The order of the function shows that we need to square a number and then accumulate the result. So, first we have 1, we get 1 as answer. Then we have 2 (making nums as [1, 2]), we get 5 as answer. Then at last, we have 3 (making nums as [1, 2, 3]), we get 14 as answer.</p>
</div>
</details>

<details><summary class="section-title">Sample Case 1</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<pre>
STDIN                         Function
-----                         --------
[root, square, accumulate]  → string order = '[root, square, accumulate]'
5                           → integer n = 5
3                           → nums[] = [ 3, 6, 1, 2, 3 ]
6
1
2
3</pre>

<p class="section-title">Sample Output</p>

<pre>
1
5
6
7
8</pre>

<p class="section-title">Explanation</p>

<p>The order of the function shows that we need to take the square root of the input number first, then again square the number and then accumulate the numbers. So, first we have 3 which goes through the transformation as <em>root(3) -&gt; 1, square(1) -&gt; 1, accumulate(1) -&gt; 1</em>, then, we get 6 which goes through the transformation as <em>root(6) -&gt; 2, square(2) -&gt; 4, accumulate(4) -&gt; 5, and so on for rest of the numbers.</em></p>
</div>
</details>