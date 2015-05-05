$("#personalbtn").click(function () {
	$("#Domainpersonal").show();
	$("#Domainprices").hide();
})

$("#businessbtn").click(function () {
	$("#Domainbusiness").show();
	$("#Domainprices").hide();
})

$("#probtn").click(function () { 
	$("#Domainpro").show();
	$("#Domainprices").hide();
})

$("#Dgoback").click(function () {
	$("#domainprices").show();
	$("#Domainpersonal").hide();
	$("#Domainbusiness").hide();
	$("#Domainpro").hide();
}) 