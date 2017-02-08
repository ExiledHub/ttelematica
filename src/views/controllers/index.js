//Controllers for index.html

$( document ).ready(function(){
    $.ajax({
	type:"POST",
	url:"Database/index.php"
    }).done(function(data){
	var pname;
	var pdesc;
	var idate;
	var edate;
	var qry = JSON.parse(data);
	var length = qry.length;
	for(var i = 0; i < length; i++){
	    pname = qry[i].pname;
	    pdesc = qry[i].pdesc;
	    idate = qry[i].idate;
	    edate = qry[i].edate;
	    console.log("itr " + i + ":" +pdesc);
	
	
	var row = $('<tr><td id="pname">' + pname + '</td><td>'
		    + pdesc + '</td><td>'
		    + idate + '</td><td>'
		    + edate + '</td></tr>')
	    $("#projectsT").append(row);
	}
    });
});
