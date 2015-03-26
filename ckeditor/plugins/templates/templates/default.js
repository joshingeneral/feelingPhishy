/*
 Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
CKEDITOR.addTemplates("default",{imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates")+"templates/images/"),templates:[
{
title:"UPS Package Notification",
image:"template1.gif",
description:"Shows a description about a package the user needs to pick up.",
html:'Dear Sir,<br><br>This email notification is to inform you that you have received a package via UPS, please click [link]here[/link] to confirm pickup. It is available for you or your joint box holder(s) to pick up during business hours. Please open the link above to confirm your package as it will be sent back later today if not confirmed. Please call (754) 423-6199 if you have any questions.<br><br>Thank you,<br>The UPS Store (#1182)<br>2110 Wilson Blvd<br>Arlington, VA 22202 USA<br>(703) 920-6199 Tel<br>(703) 920-6140 Fax<br>www.theupsstorelocal.com/1182<br>store1182@theupsstore.com<br>[image]'  
},
{

title:"Image and Title",
image:"template1.gif",
description:"One main image with a title and text that surround the image.",
html:'<h3><img src=" " alt="" style="margin-right: 10px" height="100" width="100" align="left" />Type the title here</h3><p>Type the text here</p>'},

{
title:"Strange Template",
image:"template2.gif",
description:"A template that defines two colums, each one with a title, and some text.",
html:'<table cellspacing="0" cellpadding="0" style="width:100%" border="0"><tr><td style="width:50%"><h3>Title 1</h3></td><td></td><td style="width:50%"><h3>Title 2</h3></td></tr><tr><td>Text 1</td><td></td><td>Text 2</td></tr></table><p>More text goes here.</p>'},

{
title:"Text and Table",
image:"template3.gif",
description:"A title with some text and a table.",
html:'<div style="width: 80%"><h3>Title OK here</h3><table style="width:150px;float: right" cellspacing="0" cellpadding="0" border="1"><caption style="border:solid 1px black"><strong>Table title</strong></caption><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table><p>Type the text here</p></div>'}]
}

);

