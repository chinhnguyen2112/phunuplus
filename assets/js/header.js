// function show_menu(e, type) {
// 	if (type == 1) {
// 		$(".none_pc").show();
// 		$(e).attr("onclick", "show_menu(this,2)");
// 	} else {
// 		$(".none_pc").hide();
// 		$(e).attr("onclick", "show_menu(this,1)");
// 	}
// }

$(document).click(function (event) {
	$target = $(event.target);
	if (
		!$target.closest(".img_show_menu").length &&
		$(".img_show_menu").is(":visible") &&
		!$target.closest(".list_menu").length
	) {
		$(".img_show_menu").hide(200);
	}
});
var width_submenu = $(window).width();
if (width_submenu < 1024) {
	$('.menu_hover').removeClass('.menu_hover');
	$('.menu_hover').addClass('click_menu');

}
function show_menu(e, type) {
	if (type == 1) {
		if (width_submenu > 1024) {
			$(".bg_drop_menu").show(500);
			$(e).attr("onclick", "show_menu(this,2)");
		} else {
			console.log(width_submenu);
			$(".drop_menu").css("transform","translateX(0)");
		}
	} else {
		if (width_submenu > 1024) {
			$(".bg_drop_menu").hide(500);
			$(e).attr("onclick", "show_menu(this,1)");
		} else {
			$(".drop_menu").css("transform","translateX(-101%)");
		}
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

window.onscroll = function () {
	scrollFunction();
};
var width = $(window).width();
function scrollFunction() {
	if (document.body.scrollTop > 80 && width > 1280  || document.documentElement.scrollTop > 80 && width > 1280) {
		document.getElementById("nav").style.padding = "0px";
		document.getElementById("logo").style.display = "none";
		// document.getElementById("logo_scroll").style.display = "block";
	} else {
		document.getElementById("nav").style.padding = "15px 0px 0px 0px";
		document.getElementById("logo").style.display = "block";
		// document.getElementById("logo_scroll").style.display = "none";
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

$(".submit_mail").click(function () {
	var form_data = new FormData();
	form_data.append("email", $("#input_mail").val());
	$.ajax({
		url: "/register_mail",
		type: "POST",
		processData: false,
		contentType: false,
		dataType: "json",
		data: form_data,
		success: function (data) {
			if (data.status == 0) {
				swal({
					title: "Thất bại",
					type: "error",
					text: "Thất bại",
				});
			} else if (data.status == 1) {
				swal({
					title: "Thành công",
					type: "success",
					text: "Đăng ký thành công",
				});
				$("#input_mail").val("");
			} else if (data.status == 2) {
				swal({
					title: "Thất bại",
					type: "error",
					text: "Email này đã được đăng ký",
				});
			} else if (data.status == 3) {
				swal({
					title: "Thất bại",
					type: "error",
					text: "Vui lòng nhập email",
				});
			}
		},
		error: function () {
			alert("error");
		},
	});
});

function change_language(e,type) {
	if (type == 1) {
		$('.content_flag').css('transform', 'scale(1)');
		$(e).attr("onclick", "change_language(this,2)");

	} else {
		$('.content_flag').css('transform', 'scale(0)');
		$(e).attr("onclick", "change_language(this,1)");

	}
}



// jQuery(document).ready(function($) {
// 	$(".list_item_left a").hover(function() {
// 		$(".item_right_drop").hide();
// 		$(".list_item_left a").removeClass('active');					
// 		$(this).addClass("active");					
// 		var selected_tab = $(this).find("a").attr("href");
// 		$(selected_tab).stop().fadeIn();
// 		return false;
// 	});
// });