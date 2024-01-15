
function show_menu(e, type) {
	if (type == 1) {
		$(".list_item_submenu").show(500);
		$(e).attr("onclick", "show_menu(this,2)");
		$('#line_span').addClass('active_span');
	} else {
		$(".list_item_submenu").hide(500);
		$(e).attr("onclick", "show_menu(this,1)");
		$('#line_span').removeClass('active_span');
	}
}

$("#img_search").click(function () {
	var toggleWidth = $("#search_input").width() == 160 ? "0px" : "160px";
	$("#search_input").animate(
		{
			width: toggleWidth,
		},
		300
	);
});
var check_menu = 0;
$(".btn_menu_mb").click(function () {
	if (check_menu % 2 == 0) {
		$('.svg_close').show();
		$('.svg_open').hide();
		$('.menu_mb').show();
	} else {
		$('.svg_close').hide();
		$('.svg_open').show();
		$('.menu_mb').hide();
	}
	++check_menu;
});

function show_submenu(e, type) {
	if (type == 1) {
		$(e).next().show(300);
		$(e).attr("onclick", "show_submenu(this,2)");
		$(e).addClass('active_drop');
	} else {
		$(e).next().hide(300);
		$(e).attr("onclick", "show_submenu(this,1)");
		$(e).removeClass('active_drop');
	}
}

