<?php

function pagination($base_url, $total_row, $per_page, $segment = '')
{
	$CI = &get_instance();
	$CI->load->library("pagination");
	$config['base_url'] = $base_url;
	$config['total_rows'] = $total_row;
	$config['per_page'] = $per_page;
	$config["use_page_numbers"] = true;
	$config["reuse_query_string"] = true;
	$config["prefix"] = '/';
	if ($segment > 0) {
		$config['uri_segment'] = 3;
	}
	// full tag pagination
	$config["full_tag_open"] = " <nav class='list_pagination' >
        <ul class='pagination'>";
	$config["full_tag_close"] = "</ul>
        </nav>";
	// first link
	$config["first_link"] = "&lt&lt";
	$config["first_tag_open"] = "<li class='page-item update-page-item'>";
	$config["first_tag_close"] = "</li>";

	// last link
	$config["last_link"] = "&gt&gt";
	$config["last_tag_open"] = "<li class='page-item update-page-item'>";
	$config["last_tag_close"] = "</li>";

	// next link
	$config["next_link"] = "&gt";
	$config["next_tag_open"] = "<li class='page-item update-page-item'>";
	$config["next_tag_close"] = "</li>";

	// pre link
	$config["prev_link"] = "&lt";
	$config["prev_tag_open"] = "<li class='page-item update-page-item'>";
	$config["prev_tag_close"] = "</li>";

	// cur link 
	$config["cur_tag_open"] = "<li class='page-item update-page-item active_pagin'><a class='page-link'>";
	$config["cur_tag_close"] = "</a></li>";
	$config['num_links'] = 1;

	$config["num_tag_open"] = "<li class='page-item update-page-item'>";
	$config["num_tag_close"] = "</li>";
	$config['attributes'] = array('class' => 'page-link');
	$CI->pagination->initialize($config);
}
function admin()
{
	if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0) {
		return true;
	} else {
		return false;
	}
}
function check_admin()
{
	if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 1) {
		return 1; // admin
	} else if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 2) {
		return 2; // biên tập
	} else if (isset($_SESSION['admin']) && $_SESSION['admin']['id'] > 0 && $_SESSION['admin']['type'] == 3) {
		return 3; // cộng tác viên
	}
}
function chuyen_muc($cate = null)
{
	$CI = &get_instance();
	$CI->load->database();

	$CI->db->select('*');
	if ($cate != null) {
		$CI->db->where($cate);
	}
	$array  = $CI->db->get('category')->result_array();
	return $array;
}
function tag($tag = null)
{
	$CI = &get_instance();
	$CI->load->database();

	$CI->db->select('*');
	if ($tag != null) {
		$CI->db->where($tag);
	}
	$array  = $CI->db->get('tags')->result_array();
	return $array;
}
function author($where = null)
{
	$CI = &get_instance();
	$CI->load->database();

	$CI->db->select('*');
	if ($where != null) {
		$CI->db->where($where);
	}
	$array  = $CI->db->get('admin')->result_array();
	return $array;
}
function replaceTitles($title)
{
	$title = html_entity_decode($title, ENT_COMPAT, 'UTF-8');
	$title  = remove_accent($title);
	$title = str_replace('/', '', $title);
	$title = preg_replace('/[^\00-\255]+/u', '', $title);

	if (preg_match("/[\p{Han}]/simu", $title)) {
		$title = str_replace(' ', '-', $title);
	} else {
		$arr_str  = array("&lt;", "&gt;", "/", " / ", "\\", "&apos;", "&quot;", "&amp;", "lt;", "gt;", "apos;", "quot;", "amp;", "&lt", "&gt", "&apos", "&quot", "&amp", "&#34;", "&#39;", "&#38;", "&#60;", "&#62;");

		$title  = str_replace($arr_str, " ", $title);
		$title  = preg_replace('/\p{P}|\p{S}/u', ' ', $title);
		$title = preg_replace('/[^0-9a-zA-Z\s]+/', ' ', $title);

		//Remove double space
		$array = array(
			'    ' => ' ',
			'   ' => ' ',
			'  ' => ' ',
		);
		$title = trim(strtr($title, $array));
		$title  = str_replace(" ", "-", $title);
		$title  = urlencode($title);
		// remove cac ky tu dac biet sau khi urlencode
		$array_apter = array("%0D%0A", "%", "&");
		$title  = str_replace($array_apter, "-", $title);
		$title  = strtolower($title);
	}
	return $title;
}
function remove_accent($mystring)
{
	$marTViet = array(
		"à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ",
		"è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ",
		"ì", "í", "ị", "ỉ", "ĩ",
		"ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ",
		"ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
		"ỳ", "ý", "ỵ", "ỷ", "ỹ",
		"đ",
		"À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
		"È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
		"Ì", "Í", "Ị", "Ỉ", "Ĩ",
		"Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
		"Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
		"Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
		"Đ",
		"'"
	);

	$marKoDau = array(
		"a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a",
		"e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
		"i", "i", "i", "i", "i",
		"o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o",
		"u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
		"y", "y", "y", "y", "y",
		"d",
		"A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",
		"E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
		"I", "I", "I", "I", "I",
		"O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O",
		"U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
		"Y", "Y", "Y", "Y", "Y",
		"D",
		""
	);

	return str_replace($marTViet, $marKoDau, $mystring);
}
function sendEmail($to, $name, $subject, $content)
{
	require_once(APPPATH . '/libraries/phpmailer/class.phpmailer.php');
	require_once(APPPATH . '/libraries/phpmailer/class.smtp.php');
	$usernameSmtp = 'name.chinhnguyen@gmail.com';  // Mail SMTP
	$passwordSmtp = 'xzwcxwalwldbfifu';           // Pass smtp
	$host = 'smtp.gmail.com';                    // Host SMTP (don't change)
	$port = 587;                                // Port SMTP
	$sender = 'no-reply@timviec365.com.vn';    // Mail don't rep
	$senderName = 'Phunuplus';                // Name sender
	$mail             = new PHPMailer(true); //
	$mail->SMTPSecure = 'ssl';              // secure transfer enabled
	$mail->IsSMTP();                       //
	$mail->SetFrom($sender, $senderName); //
	$mail->Username   = $usernameSmtp;   // khai bao dia chi email
	$mail->Password   = $passwordSmtp;  // khai bao mat khau   
	$mail->Host       = $host;         // sever gui mail.
	$mail->Port       = $port;        // cong gui mail de nguyen 
	$mail->SMTPAuth   = true;        // enable SMTP authentication
	$mail->SMTPSecure = "tls";      // sets the prefix to the servier        
	$mail->CharSet  = "utf-8";     //
	$mail->SMTPDebug  = 0;        // enables SMTP debug information (for testing)
	// xong phan cau hinh bat dau phan gui mail
	$mail->isHTML(true);
	$mail->Subject    = $subject; // tieu de email 
	$mail->Body       = $content;
	$mail->addAddress($to, $name);
	if (!$mail->Send()) {
		echo $mail->ErrorInfo;
	} else {
		return true;
	}
}
function alias_301($alias)
{
	if ($alias == 'nguoi-tieu-dung-thong-minh') {
		$alias = 'tieu-dung-thong-minh/';
	}
	if ($alias == '-uyen-linh-dap-tra-ve-thai-do-trong-clip-khan-gia-giat-mic-phan-nan') {
		$alias = 'uyen-linh-dap-tra-ve-thai-do-trong-clip-khan-gia-giat-mic-phan-nan/';
	}
	if ($alias == 'cach-got-tao-khong-bi-tham') {
		$alias = '7-cach-got-tao-khong-bi-tham-c112546.html';
	}
	if ($alias == 'cach-de-biet-crush-co-thich-minh-khong') {
		$alias = 'dau-hieu-nhan-biet-crush-thich-minh-c112550.html';
	}
	return $alias;
}
function replace_date($time)
{
	$weekday = date("l", $time);
	$weekday = strtolower($weekday);
	switch ($weekday) {
		case 'monday':
			$weekday = 'Thứ hai';
			break;
		case 'tuesday':
			$weekday = 'Thứ ba';
			break;
		case 'wednesday':
			$weekday = 'Thứ tư';
			break;
		case 'thursday':
			$weekday = 'Thứ năm';
			break;
		case 'friday':
			$weekday = 'Thứ sáu';
			break;
		case 'saturday':
			$weekday = 'Thứ bảy';
			break;
		default:
			$weekday = 'Chủ nhật';
			break;
	}
	return $weekday . ', ' . date('d/m/Y - H:i ', $time);
}
function alias_new($alias, $id)
{
	if ($id > 1000) {
		$alias = $alias . '-c' . $id . '.html';
	} else {
		$alias = $alias . '/';
	}
	return $alias;
}
