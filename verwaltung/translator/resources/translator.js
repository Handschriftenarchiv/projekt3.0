// setup table head

(function(){
	getJSON("/verwaltung/translator/back.php?langs",(data)=>{
		var keys=[];
		for (var lang in data) {
			var th = document.createElement("th");
			th.innerHTML = lang;
			document.getElementById("tb-head").append(th);
			if(keys.length==0){
				// extract keys from data
				for(var key in data[lang]){
					keys.push(key);
				}
			}
		}
		var tabIndex=1;
		// populate table body
		keys.forEach(key=>{
			var tr = document.createElement("tr");
			// tr.setAttribute("id",key);
			var td = document.createElement("td");
			td.innerHTML = key;
			td.setAttribute("contenteditable", "true");
			td.setAttribute("tabIndex",tabIndex);
			tr.appendChild(td);
			var langNo=1;
			for(var lang in data){
				td = document.createElement("td");
				td.textContent = data[lang][key];
				td.setAttribute("contenteditable","true");
				td.setAttribute("tabIndex",tabIndex+langNo*Object.keys(data[lang]).length);
				tr.appendChild(td);
				langNo++;
			}
			document.getElementById("tbody").appendChild(tr);
			tabIndex++;
		});
	});
})();

// functions for user action

function save(){
	postTable("/verwaltung/translator/back.php",document.querySelector('table'));
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
