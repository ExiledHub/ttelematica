//controller for new.html

function newP(){
    var name = document.getElementById('pname').value;
    var desc = document.getElementById("desc").value;
    var idate = document.getElementById("initdate").value;
    var edate = document.getElementById("enddate").value;
    console.log("name: " + name);
    console.log("descripcion: " + desc);
    console.log("init date: " + idate);
    console.log("end date: " + edate);
    var sdata = ;
    if(name==""||desc==""||idate==""||edate==""){
	alert("Error: Missing atribute. Fill all slots required.\n"+
	     "All slots marked with * are required.");
    } else {
	var url = "Database/newProyect.php";
	$.ajax({
	    type: 'POST',
	    url: url,
	    dataType: 'json'
	    success: function(data){
		//TODO :(
    }
}

function test(){
    console.log("Hello World")
}
