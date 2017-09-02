var search={
	fieldsTemplate:{
		"ID":"<input type=\"number\" name=\"val[]\"/>",
		"Titel":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Titel');\"/>",
		"Komponist":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Komponist');\"/>",
		"Bearbeiter":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Bearbeiter');\"/>",
		"Dichter":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Dichter');\"/>",
		"Setzer":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Setzer');\"/>",
		"Typus":"<select name=\"val[]\"><option>Handschrift</option><option>Kopie von Handschrift</option><option>Druck</option></select>",
		"Verlag":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Verlag');\"/>",
		"Sprache":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"20\" oninput=\"lookupField(this,'Sprache');\"/>",
		"Anzahl":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"255\" oninput=\"lookupField(this,'Anzahl');\">",
		"Sammlung":"<select name=\"val[]\"><option>Introitensammlung</option><option>Archiv</option></select>",
		"Standort":"<input type=\"search\" list=\"suggestions\" name=\"val[]\" maxlength=\"50\" oninput=\"lookupField(this,'Standort');\"/>",
		"Signatur":"<input name=\"val[]\"/>",
		"Audiolink":"<input name=\"Audiolink\" type=\"checkbox\" checked/>",
		"Dokumentlink":"<input name=\"Dokumentlink\" type=\"checkbox\" checked/><input type=\"hidden\" name=\"val[]\" value=\"\"/>"
	},
	selected:[0],
	template:"<td><select name=\"search[]\" class=\"srch\" onfocus=\"this.oldvalue=this.value;\" onchange=\"checkSelect(this);this.oldvalue=this.value;\"><option{0}>ID</option><option{1}>Titel</option><option{2}>Komponist</option>"
		+"<option{3}>Bearbeiter</option><option{4}>Dichter</option><option{5}>Setzer</option><option{6}>Typus</option><option{7}>Verlag</option><option{8}>Sprache</option>"
		+"<option{9}>Anzahl</option><option{10}>Sammlung</option><option{11}>Standort</option><option{12}>Signatur</option><option value=\"Audiolink\"{13}>Hörbeispiel verfügbar</option><option value=\"Dokumentlink\"{14}>Digitalisierungen verfügbar</option></select></td><td class=\"text\"><input name=\"val[]\">"
		+"</td><td><button type=\"button\" onclick=\"removeP(this);\" class=\"remove\"/></td>"
};
function nfield(){
	var table=document.getElementById('searchelems');
	if(document.getElementsByName('mode')[0].selectedIndex==0&&table.rows.length>12){
		return;
	}
	var newtr=table.insertRow(table.rows.length);
	if(document.getElementsByName('mode')[0].selectedIndex==0){
		newtr.innerHTML=search.template.replace(/{(\d+)}/g,function(match,number){
			return search.selected.includes(parseInt(number))?" disabled=\"true\"":"";
		});
	}else{
		newtr.innerHTML=search.template.replace(/{\d+}/g,"");
	}
	document.getElementById('searchelems').appendChild(newtr);
	if(document.getElementById('searchelems').childNodes.length==1){
		newtr.cells[2].childNodes[0].remove();
	}
	checkSelect(newtr.cells[0].childNodes[0]);
}
function removeP(elem){
	if(document.getElementById('searchelems').childNodes.length==1){
		elem.remove();
	}else{
		elem.parentNode.parentNode.remove();
	}
	checkModeSwitch();
}
function checkSelect(elem){
	elem.parentNode.parentNode.getElementsByTagName('td')[1].innerHTML=search.fieldsTemplate[elem.value];
	var elems=document.getElementsByClassName('srch');
	if(document.getElementsByName('mode')[0].selectedIndex==0){
		var sel=elem.selectedIndex;
		search.selected.splice(search.selected.indexOf(elem.oldvalue),1);
		if(search.selected.includes(sel)){
			removeP(elem.parentNode.parentNode);
			return;
		}
		search.selected=[];
		for(var i=0;i<elems.length;i++){
			for(var j=0;j<elems[i].length;j++){
				if(elems[i][j].selected){
					search.selected.push(j);
				}
			}
		}
		for(var i=0;i<elems.length;i++){
			for(var j=0;j<elems[i].length;j++){
				if(!elems[i][j].selected){
					elems[i][j].disabled=search.selected.includes(j);
				}
			}
		}
	}else{
		search.selected=[];
		for(var i=0;i<elems.length;i++){
			for(var j=0;j<elems[i].length;j++){
				if(!elems[i][j].selected){
					elems[i][j].disabled=false;
				}
			}
		}
	}
	checkModeSwitch();
}
function checkModeSwitch(){
	var e=document.getElementsByName('mode')[0];
	var elems=document.getElementsByClassName('srch');
	if(e.selectedIndex==1){
		search.selected=[];
		for(var i=0;i<elems.length;i++){
			for(var j=0;j<elems[i].length;j++){
				if(!elems[i][j].selected){
					elems[i][j].disabled=false;
				}
			}
		}
	}
	var selected=[];
	for(var i=0;i<elems.length;i++){
		for(var j=0;j<elems[i].length;j++){
			if(elems[i][j].selected){
				selected.push(j);
			}
		}
	}
	for(var i=0;i<selected.length;i++){
		for(var j=0;j<selected.length;j++){
			if(i!=j&&selected[i]==selected[j]){
				e[0].disabled=true;
				e.selectedIndex=1;
				return;
			}
		}
	}
	e[0].disabled=false;
}
function checkSubmit(extended){
	if(extended){
		for (var input of document.getElementsByName("val[]")) {
			if (input.value=="") {
				return false;
			}
		}
		return true;
	}else{
		return document.getElementById("searchBox").value!="";
	}
}
function lookup(){
	if(document.getElementById("searchBox").value==""){
		document.getElementById("suggestions").innerHTML="";
		return;
	}
	if(window.XMLHttpRequest){
		r=new XMLHttpRequest();
	}else{r=new ActiveXObject("Microsoft.XMLHTTP");}
	var url = [window.location.protocol, '//', window.location.host, window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/')), "/search.php?js&search=", document.getElementById("searchBox").value].join('');
	r.open("GET", url, true);
	r.send();
	r.onreadystatechange=function(){
		if(r.readyState==4&&r.status==200){
			document.getElementById("suggestions").innerHTML=r.responseText;
		}
	};
}
function lookupField(elem,fieldName){
	document.getElementById("suggestions").innerHTML="";
	if(elem.value==""){return;}
	if(window.XMLHttpRequest){
		r=new XMLHttpRequest();
	}else{r=new ActiveXObject("Microsoft.XMLHTTP");}
	var url = [window.location.protocol, '//', window.location.host, window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/')), "/search.php?js&field=", fieldName, "&search=", elem.value].join('');
console.log(url);
	r.open("GET", url, true);
	r.send();
	r.onreadystatechange=function(){
		if(r.readyState==4&&r.status==200){
			document.getElementById("suggestions").innerHTML=r.responseText;
		}
	};
}
