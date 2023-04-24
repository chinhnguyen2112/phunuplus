// function show_menu(e, type) {
// 	if (type == 1) {
// 		$(".none_pc").show();
// 		$(e).attr("onclick", "show_menu(this,2)");
// 	} else {
// 		$(".none_pc").hide();
// 		$(e).attr("onclick", "show_menu(this,1)");
// 	}
// }

function show_menu() {
	var search_div = document.getElementById("search_div");
	var sidenav = document.getElementById("list_menu");
	sidenav.style.height = sidenav.style.height == "450px" ? "0" : "450px";
	sidenav.style.padding-top == "50px" ? "0" : "50px";
	sidenav.style.display = sidenav.style.display == "block" ? "none" : "block";
	search_div.style.display = search_div.style.display == "block" ? "none" : "block";
}



function big_item_menu(e, type) {
if (type == 1) {
	$(e).next().show(300);

	$(e).attr("onclick", "big_item_menu(this,2)");
} else {
	$(e).next().hide(300);

	$(e).attr("onclick", "big_item_menu(this,1)");
}
}
  
 
// var acc = document.getElementsByClassName("item_menu");
// var i;
// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var menu_con = this.nextElementSibling;
//     if (menu_con.style.display === "block") {
// 		menu_con.style.display = "none";
//     } else {
// 		menu_con.style.display = "block";
//     }
//   });
// }
// function show_menu1(e) {
// 	$(".box_menu").show();
// }
// if ($(window).width() <= 1024) {
// 	$(document).click(function (event) {
// 		$target = $(event.target);
// 		if (
// 			!$target.closest(".box_menu").length &&
// 			$(".box_menu").is(":visible") &&
// 			!$target.closest(".img_show_2").length
// 		) {
// 			$(".box_menu").hide(100);
// 		}
// 	});
// }
