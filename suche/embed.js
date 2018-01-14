var d=document.getElementsByClassName('digitalisat');

for(var i=0;i<d.length;i++){
	var url=d[i].querySelector('a').href;
	url="https://issuu.com/oembed?url="+encodeURI(url)+"&format=json";
	var request;
	if(window.XMLHttpRequest){
		// Mozilla and Safari browsers
		request=new XMLHttpRequest();
	}else if(window.ActiveXObject){
		// IE
		try{
			request = new ActiveXObject('Msxml2.XMLHTTP');
		}catch(e){
			try {
				// Try and create fallback ActiveXObject
				request = new ActiveXObject('Microsoft.XMLHTTP');
			}catch (e){
				// No support, no way
			}
		}
	}
	request.domelem=d[i];
	request.onreadystatechange=function(){
		if(this.readyState==4&&this.status==200){
			var json=JSON.parse(this.responseText);
			var div=document.createElement('div');
			div.className="bg-img";
			div.style.backgroundImage="url("+json.thumbnail_url+")";
			this.domelem.appendChild(div);
			// console.log(this.domelem.width);
		}
	}
	request.open('GET',url,true);
	request.send();
}
