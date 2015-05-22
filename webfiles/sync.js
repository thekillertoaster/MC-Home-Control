function syncfilestates() {

	var localpath = window.location.href;
	var localdir = localpath.substring(0,localpath.length - 7)
	var rawFile = new XMLHttpRequest();
	rawFile.open("GET", localdir + "variables/doorstatus.txt", false);
	rawFile.onreadystatechange = function ()
	{
		if(rawFile.readyState === 4)
		{
			if(rawFile.status === 200 || rawFile.status == 0)
			{
				var doortext = rawFile.responseText;
				if(doortext == "open") {
					document.getElementById('dooropen').checked = true;
				}
			}
		}
	}
	rawFile.send(null);
	
	var localpath = window.location.href;
	var localdir = localpath.substring(0,localpath.length - 7)
	var rawFile = new XMLHttpRequest();
	rawFile.open("GET", localdir + "variables/lightstatus.txt", false);
	rawFile.onreadystatechange = function ()
	{
		if(rawFile.readyState === 4)
		{
			if(rawFile.status === 200 || rawFile.status == 0)
			{
				var lighttext = rawFile.responseText;
				if(lighttext == "off") {
					document.getElementById('lightoff').checked = true;
				}
			}
		}
	}
	rawFile.send(null);
	
	return;
}