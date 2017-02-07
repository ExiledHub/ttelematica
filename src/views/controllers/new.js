//controller for new.html

function newP(){
    var name = document.getElementById('pname').value;
    var pdesc = document.getElementById("desc").value;
    var idate = document.getElementById("initdate").value;
    var edate = document.getElementById("enddate").value;
    console.log("name: " + name);
    console.log("descripcion: " + pdesc);
    console.log("init date: " + idate);
    console.log("end date: " + edate);
    //var sdata = ;
    if(name==""||pdesc==""||idate==""||edate==""){
	alert("Error: Missing atribute. Fill all slots required.\n"+
	     "All slots marked with * are required.");
    } else {
	var url = "Database/newProyect.php";
	$.ajax({
	    type: 'POST',
	    url: url,
	    data: { pname: String(name), pdesc: String(pdesc), idate: String(idate), edate: String(edate) }
	}).done(function( msg ){
	    alert("Data saved: " + msg);
	});
	
    }
}

function test(){
    console.log("Hello World")
}
