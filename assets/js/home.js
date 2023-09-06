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


var val = 0;
var width = screen.width;
if (width > 540) {
  val = 3;
} else {
  val = 2;
}
$('.slider_hots_week').slick({
	autoplay:true,
	autoplaySpeed: 1000,
	arrows:true,
	prevArrow:'<button type="button" class="slick-prev"><img src="/images/icons/icon_arrow_slide.png" alt="icon prev"></button>',
	nextArrow:'<button type="button" class="slick-next"><img src="/images/icons/icon_arrow_slide.png" alt="icon next"></button>',
	slidesToShow:val,
	dots:true,
});