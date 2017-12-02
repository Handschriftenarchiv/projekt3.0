var saved=true;
(function(){
	getJSON("back.php?chunks",(data)=>{
		data.forEach((el)=>{
			var li = document.createElement('li');
			li.innerHTML = el;
			li.onclick = (evt) => {
				// switch on loader animation
				document.getElementById("floatingBarsG").style.display="block";
				if(!saved){
					if(!confirm("really switch without saving?")){
						return;
					}
				}
				var elems=document.querySelectorAll(".selected");
				for (elem of elems) {
					elem.classList.remove('selected');
				}
				evt.target.classList.add('selected');
				getText("back.php?chunk="+evt.target.innerHTML,(data)=>{
					document.getElementById('text').value=data;
					setSaved(true);
					// switch off loader animation
					document.getElementById("floatingBarsG").style.display="none";
				});
			};
			document.getElementById("chunk-list").appendChild(li);
		});
		// switch off loader animation
		document.getElementById("floatingBarsG").style.display="none";
	});
})();
function save(){
	// switch on loader animation
	document.getElementById("floatingBarsG").style.display="block";
	var data = {
		type:"chunk",
		name:document.getElementsByClassName('selected')[0].innerHTML,
		text:document.getElementById('text').value
	};
	postJSON("back.php",data,r=>{
		// switch off loader animation
		document.getElementById("floatingBarsG").style.display="none";
		if(r=="OK"){
			setSaved(true);
		}else{
			document.querySelector('.selected').innerHTML=prompt(r);
		}
	});
}
function newChunk(){
	if(!saved){
		if(!confirm("really switch without saving?")){
			return;
		}
	}
	var elems=document.querySelectorAll(".selected");
	for(var elem of elems){
		elem.classList.remove('selected');
	}
	var li=document.createElement('li');
	li.innerHTML=prompt("Name for new chunk?");
	// check that name does not exist already
	elems=document.querySelectorAll("#chunk-list li");
	for(var elem of elems){
		if(elem.innerHTML===li.innerHTML){
			alert('that name exists already');
			return;
		}
	}
	li.classList.add('selected');
	document.getElementById('chunk-list').appendChild(li);
	document.getElementById('text').value="";
	// new chunk was created locally but not on server
	setSaved(false);
}

function setSaved(s){
	saved=s;
	if(saved==false){
		document.getElementById('save').style.background='red';
	}else{
		document.getElementById('save').style.background='gray';
	}
}
