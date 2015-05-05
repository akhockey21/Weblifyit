$("form[name=myform]").bind('submit', function () {
	$.post('test.php', $(this).serialize(), function(data) {
		if (data == "success") {
			window.location = 'itworked.php';
		} else if (data == "error1") {
			window.location = 'store/thank-you.php';
		} else {
			window.location = 'store/thank-you.php';
		}
	});
	return false;
});