$(document).ready(function () {
	$("#list_mucluc").toc({
		content: "div.content_blog",
		headings: "h2,h3,h4",
		indexingFormats: {
			h2: "number",
			h3: "number",
			h4: "number",
		},
	});
});

$(".this_handbook  a img").css("height", height_img);
var check_click = 0;
$(".box_title_ml").click(function () {
	if (check_click % 2 == 0) {
		$(".list_mucluc").show(100);
		$(".img_show_ml").css("rotate", "90deg");
	} else {
		$(".list_mucluc").hide(100);
		$(".img_show_ml").css("rotate", "unset");
	}
	++check_click;
});


var width_img = $(".this_handbook a img").width();
var height_img = width_img / 1.73;

<<<<<<< HEAD


$('.slide_for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slide_nav'
});
$('.slide_nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical:true,
    asNavFor: '.slide_for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true,
    responsive: [
    {
        breakpoint: 992,
        settings: {
          vertical: false,
        }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: false,
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 380,
      settings: {
        vertical: false,
        slidesToShow: 2,
      }
    }
    ]
});



// change quantity 
$(".plus").click(function () {
	var th = $(this).closest(".change_qty").find(".value_qty");
	th.val(+th.val() + 1);
  });
  $(".minus").click(function () {
	var th = $(this).closest(".change_qty").find(".value_qty");
	if (th.val() > 1) th.val(+th.val() - 1);
  });
  

$(".tabs_ticket_child").click(function () {
	var id = $(this).data("id");
	var active = $(".ticket_active").data("id");
	if (id != active) {
	  $(".ticket_active").removeClass("ticket_active");
	  $(this).addClass("ticket_active");
	  if (id == 1) {
		$(".tabs_ticket_01").show();
		$(".tabs_ticket_02").hide();
		$(".tabs_ticket_03").hide();
	  }
	  if (id == 2) {
		$(".tabs_ticket_02").show();
		$(".tabs_ticket_01").hide();
		$(".tabs_ticket_03").hide();
	  }
	  if (id == 3) {
		$(".tabs_ticket_03").show();
		$(".tabs_ticket_01").hide();
		$(".tabs_ticket_02").hide();
	  }
	}
  });

// var slider = $(".slide_01");
// var itemFirst = slider.find(".content_slider > .item_inner:first-child");
// var itemLast = slider.find(".content_slider > .item_inner:last-child");
// var btn_prev = slider.find(".slick-prev");
// var btn_next = slider.find(".slick-next");
var val_slide_01 = 0;
var width = screen.width;
if (width < 768) {
	val_slide_01 = 3;
} else {
	val_slide_01 = 5;
} 
$(".content_slider").slick({
	slidesToShow: val_slide_01,
	slidesToScroll: 1,
	arrows: true,
	infinite: false,
	autoplay: false,
	// prevArrow:
	// 	'<button type="button" class="slick-logo slick-prev"><img src="/images/icons/icon_arrow_slide2.png" alt="icon prev"></button>',
	// nextArrow:
	// 	'<button type="button" class="slick-logo slick-next"><img src="/images/icons/icon_arrow_slide2.png" alt="icon next"></button>',
});


// class CustomSlider extends Siema {
// 	hideArrows(prevArrowSelector, nextArrowSelector) {
// 	  if (this.currentSlide === 0) {
// 		document.querySelector(prevArrowSelector).style.visibility = "hidden";
// 	  } else {
// 		document.querySelector(prevArrowSelector).style.visibility = "visible";
// 	  }
// 	  const index = this.currentSlide;
// 	  if (
// 		index === this.innerElements.length + 1 ||
// 		index + this.perPage >= this.innerElements.length
// 	  ) {
// 		document.querySelector(nextArrowSelector).style.visibility = "hidden";
// 	  } else {
// 		document.querySelector(nextArrowSelector).style.visibility = "visible";
// 	  }
// 	}
//   }
//   let siemaOne = new CustomSiema({
// 	selector: ".siemaOne",
// 	onChange: function () {
// 	  this.hideArrows(".prevSiemaOne", ".nextSiemaOne");
// 	},
// 	onInit: function () {
// 	  this.hideArrows(".prevSiemaOne", ".nextSiemaOne");
// 	},
// 	perPage: 4
//   });
//   document
// 	.querySelector(".prevSiemaOne")
// 	.addEventListener("click", () => siemaOne.prev());
//   document
// 	.querySelector(".nextSiemaOne")
// 	.addEventListener("click", () => siemaOne.next());
  

// $(function () {
// 	$('.siemaOne').siema({
// 	  onChange: function () {
// 		this.hideArrows('.prevSiemaOne', '.nextSiemaOne');
// 	  },
// 	  onInit: function () {
// 		this.hideArrows('.prevSiemaOne', '.nextSiemaOne');
// 	  },
// 	  perPage: 4
// 	});
// 	document
// 	  .querySelector('.prevSiemaOne')
// 	  .addEventListener('click', function () {
// 		siemaOne.prev();
// 	  });
// 	document
// 	  .querySelector('.nextSiemaOne')
// 	  .addEventListener('click', function () {
// 		siemaOne.next();
// 	  });
//   });
=======
var click_pass = 0;
var val = $("#mk_show").val();
var time = 30;
$(".text_show_pass").click(function () {
  if (click_pass == 0) {
    click_pass = ++click_pass;
    $(this).text("Chờ 30s");
    start = setInterval(function () {
      time = --time;
      console.log(1);
      $(".text_show_pass").html("Chờ " + time + "s");
      if (time <= 0) {
        $(".text_show_pass").html(val);
        clearInterval(start);
      }
    }, 1000);
  }
});
$(document).on("visibilitychange", function () {
  if (document.visibilityState == "hidden") {
    clearInterval(start);
  } else {
    start = setInterval(function () {
      time = --time;
      $(".text_show_pass").html("Chờ " + time + "s");
      if (time <= 0) {
        $(".text_show_pass").html(val);
        clearInterval(start);
      }
    }, 1000);
  }
});
>>>>>>> 6d273a316caa1d0730d6d6fdef39740b98d6d957
