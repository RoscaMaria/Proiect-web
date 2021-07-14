var judete = new Array("Alba","Arad","Arges","Bacau","Bihor","Bistrita-Nasaud","Botosani","Braila","Brasov","Bucuresti","Buzau","Calarasi","Caras-Severin","Cluj","Constanta","Covasna","Dimbovita","Dolj","Galati","Giurgiu","Gorj","Harghita","Hunedoara","Ialomita","Iasi","Maramures","Mehedinti","Mures","Neamt","Olt","Prahova","Salaj","Satu Mare","Sibiu","Suceava","Teleorman","Timis","Tulcea","Vaslui","Vilcea","Vrancea");

var loc = new Array();
loc[0] = "";
loc[1] = "Abrud|Achimesti|Acmariu|Aiud|Alba Iulia"
loc[2] =  "Aciuta|adea|Agrisu Mare|Aldesti"
loc[3] =  "Adunati|Afirmesti|Albesti"
loc[4] = "Agas|Albele|Antohesti"
loc[5] = "Abram|Abramut|Adoni"
loc[6] = "Agries|Agrisel|Agrisu de Jos"

function judet(locId,judId) {
 
    var locIndex = document.getElementById(locId).selectedIndex;
 
    var jud = document.getElementById(judId);
 
    jud.length = 0; 
    jud.options[0] = new Option('Selecteaza localitate', '');
    jud.selectedIndex = 0;
 
    var state_arr = loc[locIndex].split("|");
 
    for (var i = 0; i < state_arr.length; i++) {
        jud.options[jud.length] = new Option(state_arr[i], state_arr[i]);
    }
}
 

function localitate(locId, judId) {
    var loc = document.getElementById(locId);
    loc.length = 0;
    loc.options[0] = new Option('Selecteaza judet', ' -1');
    loc.selectedIndex = 0;
	
    for (var i = 0; i < judete.length; i++) {
        loc.options[loc.length] = new Option(judete[i], judete[i]);
    }

 
    if (judId) {
        loc.onchange = function () {
            judet(locId, judId);
        };
    }
}