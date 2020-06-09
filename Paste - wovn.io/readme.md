<div class="ps-content-wrapper-v0">
<p>The paste command is used for merging lines of a given file or list of files. Some common uses of the command and its various flags and variations have been <a href="http://www.theunixschool.com/2012/07/10-examples-of-paste-command-usage-in.html" target="_blank">listed here</a>.</p>

<p> </p>

<p>Given a list of strings separated by newlines, where each line contains the name of a city and state separated by a comma, replace the newlines with semicolons. The list of strings is passed to your program through standard input.</p>

<p> </p>

<p>For example, given the lines:</p>

<pre>
Memphis, TN
Jackson, Mississippi
Miami, F.L.
Tuskegee, AL
</pre>

<p>Print one line of text:</p>

<pre>
Memphis, TN;Jackson, Mississippi;Miami, F.L.;Tuskegee, AL
</pre>

<p> </p>

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>Read input from STDIN, and print output to STDOUT.</p>

<p> </p>

<p>Each <em>city,state</em> pair is separated by a newline.</p>
</div>
</details>
<!-- </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<p><strong>Sample Input 0</strong></p>

<pre>
Albany, N.Y.
Albuquerque, N.M.
Anchorage, Alaska
Asheville, N.C.
Atlanta, Ga.
Atlantic City, N.J.
Austin, Texas
Baltimore, Md.
Baton Rouge, La.
Billings, Mont.
Birmingham, Ala.
Bismarck, N.D.
Boise, Idaho
Boston, Mass.
Bridgeport, Conn.
</pre>

<p><strong>Sample Output 0</strong></p>

<pre>
Albany, N.Y.;Albuquerque, N.M.;Anchorage, Alaska;Asheville, N.C.;Atlanta, Ga.;Atlantic City, N.J.;Austin, Texas;Baltimore, Md.;Baton Rouge, La.;Billings, Mont.;Birmingham, Ala.;Bismarck, N.D.;Boise, Idaho;Boston, Mass.;Bridgeport, Conn.
</pre>

<p> </p>

<p><strong>Explanation 0</strong></p>

<p>The delimiter between consecutive rows of data has been transformed from the newline to a semi-colon.</p>
</div>
</details>