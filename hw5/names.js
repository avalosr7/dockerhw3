function getname() {
    var select = document.getElementById("babyselect");
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
        
        if(httpRequest.readyState == 4 && httpRequest.status == 200) {
            console.log("This request succeeded!", httpRequest.responseText);
            var names = httpRequest.responseText.split("\n");
            console.log("There are " + names.length + " names returned!");
            
            for(var i = 0; i < names.length; i++) {
                var currentName = names[i];
                var option = new Option(currentName, currentName);
                select.add(option, false);
                
            }
        }
    }
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php");
    httpRequest.send();
}

function selectionMade() {
    var selectedName = document.getElementById("babyselect").value;
    console.log("The selected name is: ", selectedName);
    getNameMeaning();
    getNameRankData();
}

function getNameRankData() {
    console.log("Getting name rank data!");
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php?type=rank");
    httpRequest.send();
}

function getNameMeaning() {
    console.log("Getting name meaning data!");
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php?type=meaning");
    httpRequest.send();
}

function loaddata(){
	getname();
	document.getElementById("babyselect").onchange = selectionMade;
}

function getname(){  
	new Ajax.Request('http://localhost:8080/hw5/babynames.php') {
		method: 'get',
		onSuccess: function(response) {
			if(httpRequest.readyState == 4 && httpRequest.status == 200) {
				console.log("This request succeeded!", httpRequest.responseText);
				var names = httpRequest.responseText.split("\n");
				console.log("There are " + names.length + " names returned!");
				
				for(var i = 0; i < names.length; i++) {
					var currentName = names[i];
					var option = new Option(currentName, currentName);
					select.add(option, false);
					
				}
			}
		}
	}
}

function getlist(){
	new Ajax.Request('http://localhost:8080/hw5/babynames.php?type=list') {
		method: 'get',
		onSuccess: function(response) {
			
		}
	}
}

function getrank(){
	new Ajax.Request('http://localhost:8080/hw5/babynames.php?type=rank') {
		method: 'get',
		onSuccess: function(response) {
			
		}
	}
}

function getmeaning(){
	new Ajax.Request('http://localhost:8080/hw5/babynames.php?type=meaning') {
		method: 'get',
		onSuccess: function(response) {
			
		}
	}
}
new Ajax.Updater('items', '/items', {
  parameters: { text: $F('text') }
});

document.addEventListener('DOMContentLoaded', function() {
    runOnLoad();
  }, false);