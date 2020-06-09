
<div class="ps-content-wrapper-v0">
<p>Given a string, split the string into two substrings at every possible point. The rightmost substring is a <em>suffix.</em> The beginning of the string is the <em>prefix.</em> Determine the lengths of the common prefix between each suffix and the original string. Sum and return the lengths of the common prefixes.</p>

<p> </p>

<p class="section-title">Example</p>

<p>Consider the only string in the array <em>inputs = ['abcabcd']</em>. Each suffix is compared to the original string.</p>

<p> </p>

<table align="left" border="1" cellpadding="1" cellspacing="1" style="width:500px;">
	<thead>
		<tr>
			<th scope="col">Remove to leave suffix</th>
			<th scope="col">Suffix</th>
			<th scope="col">Common Prefix</th>
			<th scope="col">Length</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>''</td>
			<td>'abcabcd'</td>
			<td>'abcabcd'</td>
			<td>7</td>
		</tr>
		<tr>
			<td>'a'</td>
			<td>'bcabcd'</td>
			<td>''</td>
			<td>0</td>
		</tr>
		<tr>
			<td>'ab'</td>
			<td>'cabcd'</td>
			<td>''</td>
			<td>0</td>
		</tr>
		<tr>
			<td>'abc'</td>
			<td>'abcd'</td>
			<td>'abc'</td>
			<td>3</td>
		</tr>
		<tr>
			<td>'abca'</td>
			<td>'bcd'</td>
			<td>''</td>
			<td>0</td>
		</tr>
		<tr>
			<td>'abcab'</td>
			<td>'cd'</td>
			<td>''</td>
			<td>
			<p>0</p>
			</td>
		</tr>
		<tr>
			<td>'abcabc'</td>
			<td>'d'</td>
			<td>''</td>
			<td>
			<p>0</p>
			</td>
		</tr>
	</tbody>
</table>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p> </p>

<p>The sum is <em>7 + 0 + 0 + 3 + 0 + 0 + 0 = 10.</em></p>

<p> </p>
<!--
<p class="section-title">Function Description</p>

<p>Complete the function&nbsp;<em>usernameDisparity</em>&nbsp; in the editor.</p>

<table class="function-params">
	<tbody>
		<tr>
			<td class="headers">Parameters</td>
			<td class="params-table-cell">
			<table class="params-table">
				<tbody>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th class="description">Description</th>
					</tr>
					<tr>
						<td style="text-align:center;font-family:monospace;white-space:nowrap;">inputs</td>
						<td style="text-align:center;font-family:monospace;white-space:nowrap;">String Array</td>
						<td>each array element is a string to be processed</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td class="headers">Return</td>
			<td class="left">The function returns an integer array of the sums of the similarities for each test case.</td>
		</tr>
	</tbody>
</table>
-->

<p class="section-title">Function Description</p>

<p>Complete the function <em>commonPrefix</em> in the editor below.</p>

<p> </p>

<p>commonPrefix has the following parameter(s):</p>

<p>    <em>string inputs[n]:</em>  an array of strings</p>

<p> </p>

<p>Returns:</p>

<p>    <em>int[]: </em>the sums of the common prefix lengths for each test case</p>

<p> </p>

<p class="section-title">Constraints</p>

<p><em>1 ≤ n ≤ 10</em></p>

<p><em>1 ≤ | inputs[i] | ≤ 10<sup>5</sup></em></p>

<p>Each <em>inputs[i]</em> contains only letters in the range <em>ascii[a-z]</em>.</p>
<!--       <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>The first line contains the number of test cases <em>n</em>.</p>

<p>Each of the next <em>n</em> lines contains a string, <em>inputs[i], </em>one for each test case.</p>
</div>
</details>
<!--        </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input</p>

<pre>
STDIN     Function
-----     -----
1      →  number of test cases n = 1
ababaa →  inputs = ['ababaa']
</pre>

<p class="section-title"> </p>

<p class="section-title">Sample Output</p>

<pre>
11
</pre>

<p class="section-title"> </p>

<p class="section-title">Explanation</p>

<p><em>n = 1</em></p>

<p><em>inputs = ['ababaa']</em><br>
The suffixes are<em> ['ababaa', 'babaa', 'abaa', 'baa', 'aa', 'a'].</em> The common prefix lengths of each of these suffixes with the original string are <em>[6, 0, 3, 0, 1, 1]</em> respectively, and they sum to <em>11</em>.</p>
</div>
</details>

<details><summary class="section-title">Sample Case 1</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input</p>

<pre style="font-style: normal;font-variant: normal;font-weight: normal;">
STDIN     Function
-----     -----
1      →  number of test cases n = 1
aa     →  inputs = ['aa']</pre>

<p class="section-title"> </p>

<p class="section-title">Sample Output</p>

<pre>
3</pre>

<p class="section-title"> </p>

<p class="section-title">Explanation</p>

<p><em>n = 1</em></p>

<p><em>inputs = ['aa']</em></p>

<p>The suffixes are <em>['aa', 'a']. </em>The common prefix lengths of each of these suffixes with the original string are <em>[2, 1]</em>  which sum to <em>3</em><em>.</em></p>
</div>
</details>
These json could be used to set locale, to handle request time based on client timezone.

settings could be used to hide or show modals, set actions and report could be used by tracking routes.


