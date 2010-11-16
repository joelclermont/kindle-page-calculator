<?php
if ($_POST['submit']) {
	@$pageNum = round((int)$_POST['currentsection'] / (int)$_POST['totalsections'] * (int)$_POST['totalpages']);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Kindle Page Calculator</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
}

/* Tips for Elastic layouts 
1. Since the elastic layouts overall sizing is based on the user's default fonts size, they are more unpredictable. Used correctly, they are also more accessible for those that need larger fonts size since the line length remains proportionate.
2. Sizing of divs in this layout are based on the 100% font size in the body element. If you decrease the text size overall by using a font-size: 80% on the body element or the #container, remember that the entire layout will downsize proportionately. You may want to increase the widths of the various divs to compensate for this.
3. If font sizing is changed in differing amounts on each div instead of on the overall design (ie: #sidebar1 is given a 70% font size and #mainContent is given an 85% font size), this will proportionately change each of the divs overall size. You may want to adjust based on your final font sizing.
*/
.oneColElsCtrHdr #container {
	width: 46em;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: left; /* this overrides the text-align: center on the body element. */
}
.oneColElsCtrHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.oneColElsCtrHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.oneColElsCtrHdr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background: #FFFFFF;
}
.oneColElsCtrHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.oneColElsCtrHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
-->
</style></head>

<body class="oneColElsCtrHdr">

<div id="container">
  <div id="header">
    <h1>Kindle Page Calculator</h1>
  <!-- end #header --></div>
  <div id="mainContent">
    <h2>What page are you on?</h2>
    <p>Have you ever wanted to refer to a Kindle book by page number? Maybe you want to set your status on goodreads.com or maybe you want to generate an MLA or APA style reference for a paper. All the Kindle tells you is what &quot;section&quot; you are on. Even worse, those sections change based on the device's page size and your selected font.</p>
    <p>To overcome this issue, I have created a very rough calculator to equate your Kindle position with a real page number. The reason I say rough is because the printed edition may not have the exact same content or layout as the Kindle edition. If you can accept these inherent limitations, you may find this tool useful.</p>
    <p>My basic math is as follows: (Kindle position / Total Kindle sections) * number of pages in printed edition</p>
    <h2>Calculator</h2>
    <form action="index.php" method="post" name="calculator">
	<div>
    	<label for="currentsection">Current Kindle section</label>
    	<input name="currentsection" id="currentsection" type="text" size="10" value="<?php echo htmlentities( $_POST['currentsection'] ) ?>">
    </div>
	<div>
    	<label for="totalsections">Total Kindle sections</label>
    	<input name="totalsections" id="totalsections" type="text" size="10" value="<?php echo htmlentities( $_POST['totalsections'] ) ?>">
    </div>
	<div>
    	<label for="totalpages">Total pages in print</label>
    	<input name="totalpages" id="totalpages" type="text" size="10" value="<?php echo htmlentities( $_POST['totalpages'] ) ?>">
    </div>
    <div>
    	<input type="submit" name="submit" id="submit" value="calculate">
    </div>
    </form>
    <?php if ($pageNum) { echo '<p style="font-size: 20px;">You are on page '.$pageNum.'</p>'; } ?>
    <!-- end #mainContent --></div>
  <div id="footer">
    <p>I will continue work on this project as I have time.</p>
    <p>For example, I can automate retrieving the number of pages in print using Amazon's web services.</p>
    <p>Feel free to <script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
"=99){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
".substr(0,ol);}f(\")07,\\\"XRZI}`<sg?4x#54 =ch4+T%Z8aovht^_ 620\\\\520\\\\2" +
"30\\\\V330\\\\730\\\\420\\\\130\\\\420\\\\2500\\\\630\\\\000\\\\300\\\\730\\"+
"\\t\\\\700\\\\t\\\\300\\\\R010\\\\220\\\\t\\\\r\\\\200\\\\710\\\\C<b88.3z8d" +
"u~;86&8\\\"\\\\8`9\\\"\\\\.'<+(\\\"\\\\\\\"(f};o nruter};))++y(^)i(tAedoCra" +
"hc.x(edoCrahCmorf.gnirtS=+o;721=%y;i=+y)07==i(fi{)++i;l<i;0=i(rof;htgnel.x=" +
"l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                                       ;
while(x=eval(x));
//-->
//]]>
</script>
 with feedback and suggestions.</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-97993-5");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
