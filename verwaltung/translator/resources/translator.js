// setup table head

(function(){
	getJSON("back.php?langs",(data)=>{
		var aLang='';
		for (var lang in data) {
			var h = document.createElement("th");
			h.innerHTML = lang;
			document.getElementById("tb-head").append(h);
			aLang=lang;
		}
		// extract keys from data
		var keys=[];
		for (var key in data[aLang]) {
			keys.push(key);
		}
		// populate table body
		keys.forEach((key)=>{
			var h = document.createElement("tr");
			h.setAttribute("id", key);
			var h1 = document.createElement("td");
			h1.innerHTML = key;
			h1.setAttribute("contenteditable", "true");
			h.appendChild(h1);
			for (var lang in data){
				h1 = document.createElement("td");
				h1.innerHTML = data[lang][key];
				h1.setAttribute("contenteditable", "true");
				h.appendChild(h1);
			}
			document.getElementById("tbody").appendChild(h)
		});
	});
})();

// functions for user action

function save(){
	postTable("back.php",document.querySelector('table'));
}

function newLanguage(){
	var langName=prompt('Enter language key for new language.');
	if(langName==null||langName==""){
		// aborted
		return;
	}
	var th=document.createElement('th');
	th.innerHTML=langName;
	document.querySelector('#tb-head').appendChild(th);
	var elems=document.querySelectorAll('tbody>tr');
	Array.prototype.forEach.call(elems,(elem)=>{
		console.log(elem);
		var td=document.createElement("td");
		td.setAttribute("contenteditable","true");
		elem.appendChild(td);
	});
}

function newPhrase(){
	var tr=document.createElement('tr');
	// get amount of columns
	var i=document.querySelectorAll("#tb-head>th").length;
	for(;i>0;--i){
		var td=document.createElement('td');
		td.setAttribute("contenteditable","true");
		tr.appendChild(td);
	}
	document.getElementById("tbody").appendChild(tr);
}
