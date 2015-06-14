
var xmlHttp = createXmlHttpRequestObject();
function createXmlHttpRequestObject()
{
var xmlHttp;
// if running Internet Explorer
if(window.ActiveXObject)
{
try
{
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
xmlHttp = false;
}
}
// if running Mozilla or other browsers
else
{
try
{
xmlHttp = new XMLHttpRequest();
}
catch (e)
{
xmlHttp = false;
}
}
// return the created object or display an error message
if (!xmlHttp)
	alert("Error creating the XMLHttpRequest object.");
else
return xmlHttp;
}
// make asynchronous HTTP request using the XMLHttpRequest object
function process()
{
	count=0;
// proceed only if the xmlHttp object isn't busy
if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
{
// retrieve the name typed by the user on the form
item= encodeURIComponent(document.getElementById("input_item").value);
// execute the quickstart.php page from the server
xmlHttp.open("GET", "todo.php?item=" + item, true);
// define the method to handle server responses
xmlHttp.onreadystatechange = handleServerResponse;
// make the server request
xmlHttp.send(null);
}
}
// executed automatically when a message is received from the server
function handleServerResponse()
{
	
// move forward only if the transaction has completed
if (xmlHttp.readyState == 4)
{
// status of 200 indicates the transaction completed successfully
if (xmlHttp.status == 200)
{
// extract the XML retrieved from the server
xmlResponse = xmlHttp.responseText;
var node = document.createElement("div");         // Create a text node
document.getElementById("final_list").appendChild(node); 
document.getElementById("final_list").lastChild.innerHTML=
'<div class="row"><i>'+xmlResponse + '</i></div>';
// restart sequence
}
// a HTTP status different than 200 signals an error
else
{
alert("There was a problem accessing the server: " + xmlHttp.statusText);
}
}
}

function edit(event){
	event = event || window.event //For IE
	node=event.target.parentNode;
	var current_text=node.innerHTML;
	current_html=node.parentNode.parentNode.innerHTML;
	node.innerHTML=
    '<div class="row">'+
	'<input type="text" class="col-md-8" id="edit_item" placeholder=\"'+jQuery(current_text).text()+'\">'
    +'<button type="button" class="form btn btn-sm fa fa-check-square col-md-2 pull-right" onclick="done_edit(event)" id="edit_item_btn">'+'</button>'+
    '<button type="button" class="form btn btn-sm fa fa-ban col-md-2 pull-right" onclick="item_back_btn(event,current_html)" id="item_close_btn">'+'</div>';
}

function done_edit(event){
node=event.target.parentNode;
var text=$("#edit_item").val();
console.log(text);
var temp='<div class="alert alert-dismissible" role="alert" id="item_stack">'+
  '<button type="button" class="close" data-dismiss="alert" aria-label="Close" ">'+'</button><button type="button" class="btn btn-default btn-xs fa fa-pencil" onclick="edit(event)"></button>&nbsp;&nbsp;<i>'+text+
'</i>'+'<button type="button" class="form btn btn-sm glyphicon glyphicon-remove col-md-2 pull-right" onclick="item_close_btn(event)" id="item_close_btn">'+'</div>';
node.parentNode.parentNode.innerHTML=temp;
}

function item_close_btn(event){
	node=event.target.parentNode;
	node.remove();
}

function item_back_btn(event,current_html){
	node=event.target.parentNode;
	var temp=node.innerHTML;
	node.parentNode.parentNode.innerHTML=current_html;
}