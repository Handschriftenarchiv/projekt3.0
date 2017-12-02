var saved=true;
(function(){
	getJSON("back.php?chunks",(data)=>{
		data.forEach(el=>{
			var li = document.createElement('li');
			li.innerHTML = el;
			li.onclick = evt=>{
				// check that previously edited chunk was saved
				if(!saved&&!confirm("really switch without saving?"))
					return;
				// switch on loader animation
				document.getElementById("floatingBarsG").style.display="block";
				// deselect previous item if one was selected
				try{
					document.querySelector(".selected").classList.remove('selected');
				}catch(e){}
				// select new item
				evt.target.classList.add('selected');
				getText("back.php?chunk="+evt.target.innerHTML,text=>{
					// load chunk content
					document.getElementById('text').value=text;
					// this chunk is now synced with the server
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
		name:document.querySelector('.selected').innerHTML,
		text:document.getElementById('text').value
	};
	postJSON("back.php",data,r=>{
		if(r=="OK"){
			// saving went fine
			setSaved(true);
			// switch off loader animation
			document.getElementById("floatingBarsG").style.display="none";
		}else{
			// name already exists
			// prompt for new name with message from server
			document.querySelector('.selected').innerHTML=prompt(r);
			// try saving again
			save();
		}
	});
}

function newChunk(){
	// check that previously edited chunk was saved
	if(!saved&&!confirm("really switch without saving?"))
		return;
	// deselect previous item if one was selected
	try{
		document.querySelector(".selected").classList.remove('selected');
	}catch(e){}
	var li=document.createElement('li');
	li.innerHTML=prompt("Name for new chunk?");
	// check that name does not exist already
	elems=document.querySelectorAll("#chunk-list li");
	for(var elem of elems){
		if(elem.innerHTML===li.innerHTML){
			alert('That name exists already; choose another one. Or are you looking for '+li.innerHTML+'?');
			return;
		}
	}
	// select current element
	li.classList.add('selected');
	// add new chunk to local chunk list
	document.getElementById('chunk-list').appendChild(li);
	// chunk content of new chunk is empty
	document.getElementById('text').value="";
	// new chunk was created locally but not on server
	setSaved(false);
}

// just a helper method that sets the background color of the save button
function setSaved(s){
	saved=s;
	if(saved==false){
		document.getElementById('save').style.background='red';
	}else{
		document.getElementById('save').style.background='gray';
	}
}
