function openme()
{
	document.getElementById('meblock').style.visibility='visible';
}

function closeme()
{
	document.getElementById('meblock').style.visibility='hidden';
}

var select, value, text;

function change() {
    select1 = document.getElementById("sele1");
    value1 = select1.options[select1.selectedIndex].value;

    select2 = document.getElementById("sele2");
    value2 = select2.options[select2.selectedIndex].value;

    select3 = document.getElementById("sele3");
    value3 = select3.options[select3.selectedIndex].value;

    if (value1 == "o3" || value2 == "o5" || value3 == "o9") {
    	alert("Вы здоровы");
    } else if(value1 != "03" || value2 != "06" || value3 != "o02") {
    	alert("Вы больны");
    }


    
}