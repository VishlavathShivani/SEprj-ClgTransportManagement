// JavaScript Document

function isnum()
{
	var nm=document.getElementById("tf3").value;
	if(isNaN(nm))
	{
		document.getElementById("tf3").value=null;
		document.getElementById("vnm").innerHTML="Contact Must Be Number only"; 
	}
	
	else if(nm.length<10 || nm.length>10)
	{
			document.getElementById("tf3").value=null;
		    document.getElementById("vnm").innerHTML="Contact Must Be 10 Characters Long"; 
	}	
	else if(nm.length==10)
	{
		document.getElementById("vnm").innerHTML=" ";
	}
	else
	{
			document.getElementById("vnm").innerHTML=" ";
	}
}
function vrno()
{
	var nm=document.getElementById("tf").value;
	if(isNaN(nm))
	{
		document.getElementById("tf").value=null;
		document.getElementById("vcnm").innerHTML="Roll Number Must Be Number only"; 
	}
	else if(nm.length>7 || nm.length<7)
	{
		document.getElementById("tf").value=null;
		document.getElementById("vcnm").innerHTML="Roll Number Must Be 7 Characters Long";
	}
	else
	{
			document.getElementById("vcnm").innerHTML=" ";	
	}
		
}