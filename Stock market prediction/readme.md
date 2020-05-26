#Stock market prediction

<div class="ps-content-wrapper-v0">
<p>In this prediction game, the first player gives the second player some stock market data for some consecutive days. The data contains a company's stock price on each day. The rules for the game are: </p>

<ul>
	<li>Player <em>1</em> will tell player <em>2</em> a day number</li>
	<li>player <em>2</em> has to find the nearest day on which stock price is smaller than the given day</li>
	<li>If there are two results, then player <em>2</em> finds the day number which is smaller</li>
	<li>if no such day exists, then the answer is<em> -1.</em>
</li>
</ul>

<p> </p>

<p>For example, the image below shows the stock market data for <em>10 </em>consecutive days. The horizontal axis represents the day number, starting at 1, and the vertical axis represents the stock price on that day.</p>

<p style="margin-left:320px;">     <img alt="Stock Market Example" height="330" src="https://hrcdn.net/s3_pub/istreet-assets/sCktvQBz5A5jdgRN3yKBGQ/stock_market_prediction_example.svg" style="width: 477px;height: 285px;border-width:1px;border-style:solid;margin:1px;" width="406"></p>

<p> </p>

<p><strong>Example</strong></p>

<p><em>n = 10</em></p>

<p><em>stockData = [5, 6, 8, 4, 9, 10, 8, 3, 6, 4]</em></p>

<p><em>queries = [6, 5, 4]</em></p>

<p> </p>

<p>On day 6, the stock price is 10. Both 9 and 8 are lower prices one day away. Choose 9 (day 5) because it is before day 6.</p>

<p>On day 5, the stock price is 9. 4 is the closest lower price on day 4.</p>

<p>On day 4, the stock price is 4. The only lower price is on day 8.</p>

<p>The return array is [5, 4, 8].</p>

<p> </p>

<p> </p>

<p class="section-title">Function Description</p>

<p class="section-title"> </p>

<p>Complete the <em>predictAnswer</em> function in the editor below.</p>

<p> </p>

<p><em>predictAnswer</em> has <em>2</em> parameters:</p>

<p><em>    int stockData[n]: </em>the value of each <em>stockData[i]</em> is the stock price on the<em> i+1</em><sup><em>th</em> </sup>day (where <em>0 ≤ i &lt; n</em>).</p>

<p><em>    int queries[q]: </em>the value of each element <em>queries[j]<sub>, </sub></em>is the day number given in the query (where <em>0 ≤ j &lt; q</em>).</p>

<p><strong>Return</strong></p>

<p>    <em>int[q]:</em>  the value at each index <em>i</em> is the answer to <em>queries[i]</em></p>

<p class="section-title">Constraints</p>

<ul>
	<li><em>1 ≤ n ≤ 10<sup>5</sup></em></li>
	<li><em>1 ≤ stockData[i] ≤ 10<sup>9</sup></em></li>
	<li><em>1 ≤ q ≤ 10<sup>5</sup></em></li>
	<li><em>1 ≤ queries[j] ≤ 10<sup>9</sup></em></li>
</ul>

<p> </p>
<!--       <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details title="Click bar to open/close the example."><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>Locked stub code in the editor reads the following input from stdin and passes it to the function.</p>

<p> </p>

<p>The first line contains an integer, <em>n</em>, denoting the number of elements in <em>stockData</em>.</p>

<p>Each line <em>i<sup>th</sup></em><sup> </sup>of the <em>n</em> subsequent lines contains an integer, <em>stockData[i]<span style="font-size: 12px;">, </span></em>the stock price on the<em> </em><em>i+1</em><em><sup><em>th</em> </sup></em>day.</p>

<p>Next line contains an integer, <em>q</em>, the number of elements in <em>queries</em>.</p>

<p>Each line <em>j<sup>th</sup></em> of the <em>q </em>subsequent lines contains an integer, <em>queries[j]<span style="font-size: 12px;">, </span></em>the day number of the<em> </em><em>j</em><sup><em>th</em> </sup>query.</p>
</div>
</details>
<!--        </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input 0</p>

<pre>
STDIN     Function
-----     --------
10   →    stockData[] size n = 10
5    →    stockData = [5, 6, 8, 4, 9, 10, 8, 3, 6, 4]
6
8
4
9
10
8
3
6
4 
3    →    queries[] size q = 3
3    →    queries = [3, 1, 8]
1
8
</pre>

<p class="section-title">Sample Output 0</p>

<pre>
2
4
-1</pre>

<p class="section-title">Explanation 0</p>

<p style="margin-left:320px;">     <img alt="Stock Market Example" height="330" src="https://hrcdn.net/s3_pub/istreet-assets/sCktvQBz5A5jdgRN3yKBGQ/stock_market_prediction_example.svg" style="width: 477px;height: 285px;border-width:1px;border-style:solid;margin:1px;" width="406"></p>

<ul>
	<li>If the day number is <em>3,</em> both days 2 and 4 are smaller.  Choose the earlier day, day 2.</li>
	<li>If the day number is <em>1,</em> day 4 is the closest day with a smaller price.</li>
	<li>If the day number is <em style='font-family: "Whitney SSm A", "Whitney SSm B", AvenirNext-Regular, "Segoe UI", Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14.4px;background-color: transparent;'>8,</em><span style='font-family: "Whitney SSm A", "Whitney SSm B", AvenirNext-Regular, "Segoe UI", Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14.4px;background-color: transparent;'> there is no day where the price is less than 3.  The answer is -1.</span>
</li>
	<li><span style='font-family: "Whitney SSm A", "Whitney SSm B", AvenirNext-Regular, "Segoe UI", Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 14.4px;background-color: transparent;'>The return array is [2, 4, -1]</span></li>
</ul>
</div>
</details>