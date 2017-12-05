/**
@param url The URL the data should be fetched from
@param callback function that is called on success. only parameter can be the JSON object that was received.
*/
function getJSON(url,callback){
	var req = new XMLHttpRequest();
	req.open('GET', url, true);
	req.onload = () => {
		if(req.status>=200&&req.status<400){
			var data=JSON.parse(req.responseText);
			callback(data);
		}
	};
	req.send();
}

/**
@param url The URL the data should be fetched from
@param callback function that is called on success. only parameter can be the response text.
*/
function getText(url,callback){
	var req = new XMLHttpRequest();
	req.open('GET', url, true);
	req.onload = () => {
		if(req.status>=200&&req.status<400){
			callback(req.responseText);
		}
	};
	req.send();
}

/**
@param url The URL the data should be sent to
@param data The data that should be sent. (a JSON object)
@param callback (optional) function that is called on success. only parameter can be the text that was the response
*/
function postJSON(url,data,callback){
	var req = new XMLHttpRequest();
	req.open('POST', url, true);
	req.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
	if(typeof callback!="undefined"){
		req.onload = () =>{
			if(req.status>=200&&req.status<400){
				callback(req.responseText);
			}
		};
	}
	req.send(JSON.stringify(data));
}

function postTable(url,table){
	var columns=[];
	// get table head columns and convert HTMLCollection to array
	var elems=[].slice.call(table.querySelector('#tb-head').children);
	for(var elem of elems){
		columns.push(elem.textContent);
	}
	var tableData=[];
	elems=[].slice.call(table.querySelectorAll('tbody>tr'));
	for(var elem of elems){
		var row={};
		var cols=[].slice.call(elem.querySelectorAll('td'));
		for(var i=0;i<columns.length;i++){
			row[columns[i]]=cols[i].textContent;
		}
		tableData.push(row);
	}
	var data={
		type:"table",
		table:tableData
	};
	postJSON(url,data);
}
