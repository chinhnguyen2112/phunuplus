var check_menu = 0;
$(".btn_menu_mb").click(function () {
	if (check_menu % 2 == 0) {
		$('.list_menu_pc').show();
	} else {
		$('.list_menu_pc').hide();
	}
	++check_menu;
});