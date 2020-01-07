<!-- for show Sub Category type in add tipes and tricks using by ajax (code start)-->
<script type="text/javascript">
	var xmlHttp
	//Math.random()
	function show_sub_cat(str)
	{ 
		//alert(str);
		xmlHttp=GetXmlHttpObject();
		if (xmlHttp==null)
		{
		  alert ("Your browser does not support AJAX!");
		  return;
		} 
		var url="ajax_action.php";
		url=url+"?show_sub_cat_id="+str;
		xmlHttp.onreadystatechange=stateChanged;
		xmlHttp.open("GET",url,true);
		xmlHttp.send(null);
	}
	function stateChanged() 
	{ 
		if (xmlHttp.readyState==4)
		{
			document.getElementById("txtHint").innerHTML=xmlHttp.responseText; 
		}
	}
	function GetXmlHttpObject()
	{
		var xmlHttp=null;
		try
		{
		  // Firefox, Opera 8.0+, Safari
		  xmlHttp=new XMLHttpRequest();
		}
		catch (e)
		{
			// Internet Explorer
			try
			{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		 	}
			catch (e)
		  	{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
		return xmlHttp;
	}
</script>
<!-- for show Sub Category type in add tipes and tricks using by ajax (code end)-->