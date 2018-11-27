window.onunload = function ()
{
	alert("Done!!");
		var v = document.getElementById("ft_list").children;

		var txt = []; 
    	for (var i = 0; i < c.length; i++) {
    		if (v[i])
        		txt.push(v[i].childNodes[0].nodeValue);
      //  	alert(v[i].childNodes[0].nodeValue);
    	}
    //alert(v[i].childNodes[0].nodeValue);

    	alert(txt[0]);
    	alert(txt[1]);
    	var update_coo = txt.join("|");
    	alert(update_coo);
    	document.cookie = "todo="+update_coo + ";expires=Tue, 18 Dec 2018 12:00:00 UTC;path=/";
    	alert("Done2!!");

}

window.onload = function ()
{
	var x = document.cookie;
	var list = document.getElementById("ft_list");
	var btnnew = document.getElementById("create");
	var btnreset = document.getElementById("reset");

	
	var contents =  decodeURIComponent(x);
	if (contents) {

		var c = contents.substring(5).split("|");

		for (var i = c.length; i < -1; i++)
		{
			var newdiv = document.createElement("DIV");
			var t = document.createTextNode(c[i]);
			newdiv.appendChild(t);
			list.appendChild(newdiv);
			list.insertBefore(newdiv, list.childNodes[0]);
			newdiv.addEventListener("click", remove);
		}
	}

	btnreset.onclick = function () {
		alert("Done!!");
		var v = document.getElementById("ft_list").children;

		var txt = []; 
    	for (var i = 0; i < c.length; i++) {
    		if (v[i])
        		txt.push(v[i].childNodes[0].nodeValue);
      //  	alert(v[i].childNodes[0].nodeValue);
    	}
    //alert(v[i].childNodes[0].nodeValue);

    	alert(txt[0]);
    	alert(txt[1]);
    	var update_coo = txt.join("|");
    	alert(update_coo);
    	document.cookie = "todo="+update_coo + ";expires=Tue, 18 Dec 2018 12:00:00 UTC;path=/";
    	alert("Done2!!");
		}

	function remove()
	{
		var item = event.target;
		var todo = item.innerHTML;

		if (confirm("Are you sure you want to remove :\n " + todo + "\n| OK = Yes , Cancel = No") ==  true) {
			item.parentNode.removeChild(item);
		}
	}

	btnnew.onclick = function () 
	{
		
		alert("done");
		var addnew = prompt("Enter New TO DO :");

		if (addnew)
		{
			var items;
			var newdiv = document.createElement("DIV");

			var t = document.createTextNode(addnew);
			newdiv.appendChild(t);
			list.appendChild(newdiv);
			list.insertBefore(newdiv, list.childNodes[0]);
			newdiv.addEventListener("click", remove);

			if (!contents)
			{
			 	x = document.cookie ="todo="+addnew+";expires=Tue, 18 Dec 2018 12:00:00 UTC;path=/";
				alert("New Cookie");
			}
			else
			{
				alert("almost there");
				contents =  decodeURIComponent(x);

				var c = contents.split("|");
				alert("0:" + c[0]);
	
				c.push(addnew);
		
				var update_coo = c.join("|");
				alert(update_coo);
				document.cookie = update_coo + ";expires=Tue, 18 Dec 2018 12:00:00 UTC;path=/";
//				alert("done");
 
			}


		}

	}

}
