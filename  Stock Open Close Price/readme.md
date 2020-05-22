#Stock Open Close Price on Particular Weekdays

<p>Write a program to retrieve and report various stock information for given days.</p>

<p> </p>

<p>Query for the stock information using one of the following queries:</p>

<ul>
	<li>
<code style="color:black;">https://jsonmock.hackerrank.com/api/stocks</code>: This query returns all available stock information. The response is paginated so you may need to query <code style="color:black;">https://jsonmock.hackerrank.com/api/stocks/?page=pageNumber</code>, where <code style="color:black;">pageNumber</code> is an integer that describes the page number to view (e.g., 1, 2, etc.).</li>
	<li>
<code style="color:black;">https://jsonmock.hackerrank.com/api/stocks/?key=value</code>: This query returns all results where the searched key has exact matching value. The response is paginated, so you may need to query <code style="color:black;">https://jsonmock.hackerrank.com/api/stocks/?key=value&amp;page=pageNumber</code>, where <code style="color:black;">pageNumber</code> is an integer that describes the page number to view (e.g., 1, 2, etc.).</li>
	<li>
<code style="color:black;">https://jsonmock.hackerrank.com/api/stocks/search?key=value</code>: This query returns all the results where the searched key has values that contains <code style="color:black;">value</code> as a substring. The response is paginated, so you may need to query <code style="color:black;">https://jsonmock.hackerrank.com/api/stocks/search?key=value&amp;page=pageNumber</code>, where <code style="color:black;">pageNumber</code> is an integer that describes the page number to view (e.g., 1, 2, etc.).</li>
</ul>

<p> </p>

<p>Each of the queries returns a JSON response with the following <em>five</em> fields:</p>

<ul>
	<li>
<code style="color:black;">page</code>: The current page number.</li>
	<li>
<code style="color:black;">per_page</code>: The maximum number of results per page.</li>
	<li>
<code style="color:black;">total</code>: The total number of response.</li>
	<li>
<code style="color:black;">total_pages</code>: The total number of pages which must be queried to get all the results.</li>
	<li>
<code style="color:black;">data</code>: An array of JSON objects that contains the stock information.  The JSON contains the following <em>five</em> fields, which could be used as the <em>key</em> to query:</li>
	<li style="margin-left:40px;">
<code style="color:black;">date</code>: A string that describes the date on which the stock information is provided. The date format is <code style="color:black;">d-mmm-yyyy</code> , where <code style="color:black;">d</code> describes a valid day of the month, <code style="color:black;">mmm</code> describes the complete name of the month (e.g. , <code style="color:black;">January</code> , <code style="color:black;">February</code> , <code style="color:black;">March</code> , etc.), and <code style="color:black;">yyyy</code> describes the year. The date is in the range <code style="color:black;">5-January-2000</code> to <code style="color:black;">1-January-2014</code> inclusive. There could be no information provided for some of the dates and the information is available for <code style="color:black;">Monday</code> to <code style="color:black;">Friday</code> only.</li>
	<li style="margin-left:40px;">
<code style="color:black;">open</code>: A float value that describes the stock open price on the given date.</li>
	<li style="margin-left:40px;">
<code style="color:black;">close</code>: A float value that describes the stock close price on the given date.</li>
	<li style="margin-left:40px;">
<code style="color:black;">high</code>: A float value that describes the stock highest price on the given date.</li>
	<li style="margin-left:40px;">
<code style="color:black;">low</code>: A float value that describes the stock lowest price on the given date.</li>
</ul>

<p> </p>

<p>To solve this challenge, complete the function <em>openAndClosePrices</em>, which has three string parameters: <em>firstDate,</em> <em>lastDate</em>, and <em>weekDay</em>. Query for the stock <em>open</em> and <em>close</em> prices on each date when the weekday is <em>weekDay </em>if the stock information is available. The stock information on each date should be printed on a new line that contains the three space separated values that describe the date, the open price, and the close price respectively. The order of the dates in the output does not matter.</p>

<p> </p>

<p><strong>Function Description</strong></p>

<p> </p>

<p>Complete the <em>openAndClosePrices</em> function in the editor below.  It must perform the operations described above and <strong>print</strong> the required information.  There is no return value expected.</p>

<p> </p>

<p><em>openAndClosePrices </em>has the following parameters:</p>

<p>    <em>firstDate:  </em>a date string in the format described above</p>

<p>    <em>lastDate</em>:  a date string in the format described above</p>

<p>    <em>weekday</em>: a string that represents the day of week to query</p>

<p> </p>

<p><strong>Constraints</strong></p>

<p> </p>

<ul>
	<li>
<em>weekday</em> will be one of the following: <em>[Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]</em>
</li>
</ul>
<!-- <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>Input from stdin will be processed as follows and passed to the function.</p>

<p> </p>

<p>The first line contains a date string that denotes <em>firstDate</em>.</p>

<p>The second line contains a date string that denotes <em>lastDate.</em></p>

<p>The third line contains a string <em>weekday.</em></p>

<p> </p>
</div>
</details>

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<p>1-January-2000 22-February-2000 Monday</p>

<p> </p>

<p><strong>Sample Output</strong></p>

<pre>
17-January-2000 5617.7 5404.07
31-January-2000 5338.67 5205.29
7-February-2000 5431.55 5474
14-February-2000 6130.23 5924.31
21-February-2000 5874.25 5876.89</pre>

<p> </p>

<p><strong>Explanation</strong></p>

<p>For the date range <em>1-January-2000</em> to <em>22-February-2000</em> stock information is available on <em>Mondays</em> on the following <em>five</em> dates:</p>

<pre class="prettyprint">
<code class="language-json">[
    {
        "date": "17-January-2000",
        "open": 5617.7,
        "high": 5664.5,
        "low": 5404.07,
        "close": 5404.07
    },
    {
        "date": "31-January-2000",
        "open": 5338.67,
        "high": 5345.3,
        "low": 5186.32,
        "close": 5205.29
    },
    {
        "date": "7-February-2000",
        "open": 5431.55,
        "high": 5518.29,
        "low": 5431.55,
        "close": 5474.0
    },
    {
        "date": "14-February-2000",
        "open": 6130.23,
        "high": 6150.69,
        "low": 5923.17,
        "close": 5924.31
    },
    {
        "date": "21-February-2000",
        "open": 5874.25,
        "high": 5941.9,
        "low": 5834.51,
        "close": 5876.89
    }
]</code></pre>
</div>