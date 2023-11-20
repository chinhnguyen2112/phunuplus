var page = 2;
$(".load_more").click(function () {
	var show_more = $(this);
	var form_data = new FormData();
	form_data.append("page", page);
	$.ajax({
		url: "/load_more",
		type: "POST",
		processData: false,
		contentType: false,
		dataType: "json",
		data: form_data,
		success: function (data) {
			++page;
			if (data.status == 0) {
				$(".load_more").remove();
			} else if (data.status == 1) {
				show_more.before(data.html);
				if (data.next == 0) {
					$(".load_more").remove();
				}
			}
		},
		error: function () {
			alert("error");
		},
	});
});

<<<<<<< HEAD

$(".slide_banner").slick({
	autoplay: true,
	autoplaySpeed: 1000,
	arrows: true,
	prevArrow:
		'<button type="button" class="slick-prev"><img src="/images/icons/icon_arrow_menu.png" alt="icon prev"></button>',
	nextArrow:
		'<button type="button" class="slick-next"><img src="/images/icons/icon_arrow_menu.png" alt="icon next"></button>',
	slidesToShow: 1,
	dots: true,
});


var val = 0;
var width = screen.width;
if (width < 768) {
	val = 5;
} else {
	val = 9;
} 
$(".list_logo").slick({
=======
var val = 0;
var width = screen.width;
if (width < 768) {
	val = 1;
} else if (width < 1024) {
	val = 3;
} else {
	val = 4;
}
$(".slider_hots_week").slick({
>>>>>>> 6d273a316caa1d0730d6d6fdef39740b98d6d957
	autoplay: true,
	autoplaySpeed: 1000,
	arrows: true,
	prevArrow:
<<<<<<< HEAD
		'<button type="button" class="slick-logo slick-prev-logo"><img src="/images/icons/icon_arrow_slide2.png" alt="icon prev"></button>',
	nextArrow:
		'<button type="button" class="slick-logo slick-next-logo"><img src="/images/icons/icon_arrow_slide2.png" alt="icon next"></button>',
	slidesToShow: val,
});

$(".tab_01").click(function () {
	var id = $(this).data("id");
	var active = $(".active_a").data("id");
	if (id != active) {
	  $(".active_a").removeClass("active_a");
	  $(this).addClass("active_a");
	  if (id == 1) {
		$(".item_01a").show();
		$(".item_02a").hide();
		$(".item_03a").hide();
	  }
	  if (id == 2) {
		$(".item_02a").show();
		$(".item_01a").hide();
		$(".item_03a").hide();
	  }
	  if (id == 3) {
		$(".item_03a").show();
		$(".item_02a").hide();
		$(".item_01a").hide();
	  }
	}
  });
  

  $(".tab_02").click(function () {
	var id = $(this).data("id");
	var active = $(".active_b").data("id");
	if (id != active) {
	  $(".active_b").removeClass("active_b");
	  $(this).addClass("active_b");
	  if (id == 1) {
		$(".item_01b").show();
		$(".item_02b").hide();
		$(".item_03b").hide();
	  }
	  if (id == 2) {
		$(".item_02b").show();
		$(".item_01b").hide();
		$(".item_03b").hide();
	  }
	  if (id == 3) {
		$(".item_03b").show();
		$(".item_02b").hide();
		$(".item_01b").hide();
	  }
	}
  });
  
=======
		'<button type="button" class="slick-prev"><img src="/images/icons/icon_arrow_slide.png" alt="icon prev"></button>',
	nextArrow:
		'<button type="button" class="slick-next"><img src="/images/icons/icon_arrow_slide.png" alt="icon next"></button>',
	slidesToShow: val,
	dots: true,
});
>>>>>>> 6d273a316caa1d0730d6d6fdef39740b98d6d957
