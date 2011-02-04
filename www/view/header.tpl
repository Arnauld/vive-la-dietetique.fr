<patTemplate:tmpl name="header">
<div id="pageHeader">
	<h1><span>{PAGE_TITLE}</span></h1>
	<h2><span>{PAGE_SUBTITLE}</span></h2>
	<div id="header">
		<ul>
			<patTemplate:tmpl name="header_entry" type="condition" conditionvar="isCurrent">
			<patTemplate:sub condition="true">
			<li id="current"><a id="{ID}" href="{LINK}">{LABEL}</a></li>
			</patTemplate:sub> 
			<patTemplate:sub condition="false">
			<li><a id="{ID}" href="{LINK}">{LABEL}</a></li>
			</patTemplate:sub></patTemplate:tmpl>
		</ul>
	</div>
</div>
</patTemplate:tmpl>