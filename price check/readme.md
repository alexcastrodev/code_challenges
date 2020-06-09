<div class="preheader" style="display:none;">Determine the number of items whose sale prices were modified.</div>

<p>There is a shop with old-style cash registers. Rather than scanning items and pulling the price from a database, the price of each item is typed in manually. This method sometimes leads to errors. Given a list of items and their correct prices, compare the prices to those entered when each item was sold. Determine the number of errors in selling prices.</p>

<p> </p>

<p><strong>Example</strong></p>

<p><em>products = ['eggs', 'milk', 'cheese']</em> </p>

<p><em>productPrices = [2.89, 3.29, 5.79]</em></p>

<p><em>productSold = ['eggs', 'eggs', 'cheese', 'milk']</em> </p>

<p><em>soldPrice = [2.89, 2.99, 5.97, 3.29].</em> </p>

<p> </p>

<pre>
          Price
Product   Actual  Expected  Error
eggs      2.89    2.89
eggs      2.99    2.89      1
cheese    5.97    5.79      1
milk      3.29    3.29
</pre>

<p> </p>

<p>The second sale of eggs has a wrong price, as does the sale of cheese. There are <em>2</em> errors in pricing.</p>

<p> </p>

<p><strong>Function Description </strong></p>

<p>Complete the function <em>priceCheck</em> in the editor below.</p>

<p> </p>

<p>priceCheck has the following parameter(s):</p>

<p>    string <em>products[n]:</em>  each <em>products[i] </em>is the name of an item for sale</p>

<p>    string <em>productPrices[n]:</em>  each <em>productPrices[i]</em> is the price of <em>products[i]</em></p>

<p>    string <em>productSold[m]:</em>  each <em>productSold[j]</em> is the name of a <i>product sold</i></p>

<p>    float <em>soldPrice[m]:</em>  each <em>soldPrice[j]</em> contains the sale price recorded for <em>productSold[j]</em>.</p>

<p> </p>

<p>Returns:</p>

<p>    int: the number of sale prices that were entered incorrectly</p>

<p> </p>

<p class="section-title">Constraints</p>

<ul>
	<li><em>1 ≤ n ≤ 10<sup>5</sup></em></li>
	<li><em>1 ≤ m ≤ n</em></li>
	<li>
<em>1.00 ≤ productPrices[i], soldPrice[j] ≤ 100000.00</em>, where <em>0 ≤ i &lt; n</em>, and <em>0 ≤ j &lt; m</em>
</li>
</ul>
<!--       <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format for Custom Testing</summary>

<div class="collapsable-details">
<p>Input from stdin will be processed as follows and passed to the function.</p>

<p> </p>

<p>The first line contains an integer <em>n</em> the size of the <em>products</em> array.</p>

<p>The next <em>n</em> lines each contain an element <em>products[i]</em>.</p>

<p>The next line contains an integer <em>n,</em> the size of the <em>productPrices</em> array.</p>

<p>The next <em>n</em> lines each contain an element <em>productPrices[i]</em>.</p>

<p>The next line contains an integer <em>m</em>, the size of the <em>productSold</em> array.</p>

<p>The next <em>m</em> lines each contain an element, <em>productSold[j]</em>.</p>

<p>The next line contains an integer, <em>m</em>, the size of the <em>soldPrice</em> array.</p>

<p>The next <em>m</em> lines each contain an element <em>soldPrice[j]</em>.</p>
</div>
</details>

<details open="open"><summary class="section-title">Sample Case 0</summary>

<p class="section-title">Sample Input 0</p>

<pre>
STDIN        Function 
-----        -------- 
4        →   products[] size n = 4
rice     →   products=['rice', 'sugar', 'wheat', 'cheese']
sugar
wheat
cheese
4        →  productPrices[] size n = 4
16.89    →  productPrices=[16.89, 56.92, 20.89, 345.99]
56.92
20.89
345.99
2        →  productSold[] size m = 2
rice     →  productSold =['rice', 'cheese']
cheese
2        →  soldPrice[] size m = 2
18.99    →  soldPrice =[18.99, 400.89]
400.89</pre>

<p class="section-title">Sample Output 0</p>

<pre>
2</pre>

<p class="section-title">Explanation 0</p>

<p> </p>

<pre>
          Price
Product   Actual  Expected  Error
rice       18.99   16.89    1
cheese    400.89  345.99    1
</pre>

<p> </p>

<p>The sales of <em>rice</em> and <em>cheese</em> were at the wrong prices. So, the number of sale prices that were entered incorrectly is 2.</p>
</details>

<details title="Click bar to open/close the example.">
<p> </p>

<p> </p>
<summary class="section-title">Sample Case 1</summary>

<p class="section-title">Sample Input 1</p>

<pre>
STDIN         Function
-----         --------
3          →  n = 3 .The size of the products array
chocolate  →  products=[chocolate, cheese, tomato] 
cheese
tomato
3          →  n = 3 .The size of the productPrices array 
15.00      →  productPrices=[15.00, 300.90, 23.44] 
300.90 
23.44
3          →  m = 3 .The size of the productSold array 
chocolate  →  productSold=[chocolate, cheese, tomato]
cheese
tomato
3          →  m = 3 .The size of the soldPrice array 
15.00      →  soldPrice =[15, 300.90,10.00] 
300.90 
10.00
</pre>

<p class="section-title">Sample Output 1</p>

<pre>
1</pre>

<p class="section-title">Explanation 1</p>

<p> </p>

<pre>
            Price
Product     Actual   Expected  Error
chocolate    15.00    15.00
cheese      300.90   300.90
tomato       10.00    23.44    1
</pre>

<p> </p>

<p>Only the <em>tomato</em> sale does not match the price list. So, the number of sale prices that were entered incorrectly is 1.</p>
</details>