<patTemplate:tmpl name="page">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{PAGE_TITLE}</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  	
  	<patTemplate:tmpl name="meta">
  	<meta name="{NAME}" content="{CONTENT}"/></patTemplate:tmpl>
  	
  	<patTemplate:tmpl name="style">
	<link href="{PATH}" rel="stylesheet" type="text/css" /></patTemplate:tmpl>
	
	{HEAD_ADDENDUM}
</head>
<body {BODY_ATTRIBUTES}>
	<div id="documentContent">
		<patTemplate:tmpl name="includedHeader" src="header.tpl" parse="on"/>
		
		<div id="pageContent">
				<patTemplate:tmpl name="includedNav" src="contentNav.tpl" parse="on"/>
				{PAGE_CONTENT}
		</div>
		
		<patTemplate:tmpl name="includedFooter" src="footer.tpl" parse="on"/>
	</div>
	<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-13243569-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
</patTemplate:tmpl>