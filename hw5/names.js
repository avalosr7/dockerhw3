function loaddata(){
	getname();
	document.getElementById("babyselect").onchange = selectionMade;
}

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
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php", true);
    httpRequest.send();
}

function selectionMade() {
    var select = document.getElementById("babyselect").value;
    console.log("The selected name is: ", selectedName);
	getList();
    getNameMeaning();
    getNameRankData();
}

function getList() {
	console.log("Getting List");
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php?type=list", true);
	httpRequest.send();
}

function getNameRankData() {
	var select = document.getElementById("meaningarea").value;
    console.log("Getting name rank data!");
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php?type=rank", true);
    httpRequest.send();
}

function getNameMeaning() {
    console.log("Getting name meaning data!");
	httpRequest.open("GET", "http://localhost:8080/hw5/babynames.php?type=meaning", true);
    httpRequest.send();
}



document.addEventListener('DOMContentLoaded', function() {
    runOnLoad();
  }, false);