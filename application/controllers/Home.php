<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Madmin']);
        $this->load->database();
        $this->load->helper(['url', 'func_helper']);
        $this->load->library(['pagination311', 'session']);
    }
    public function home()
    {
        $monday = strtotime("this week 00:00:00");
        $data['canonical'] = base_url();
        $time = time();
        $select = "SELECT id,title,alias,image,created_at,sapo FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time ";
        $select_cate = "SELECT blogs.id,blogs.title,blogs.alias,blogs.image,blogs.created_at,blogs.sapo,chuyenmuc,category.name as name_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE index_blog = 1 AND type = 0 AND time_post <= $time ";
        $data['blog'] = $this->Madmin->query_sql($select_cate . " ORDER BY created_at DESC  LIMIT 5");
        $data['hots_week'] = $this->Madmin->query_sql($select_cate . " AND blogs.created_at >= $monday ORDER by view LIMIT 10");
        $data['yeu'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN  ('2','12','24') ORDER BY created_at DESC LIMIT 4");
        $data['dep'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN ('4','16','17','18','19') ORDER BY created_at DESC LIMIT 4");
        $data['khoe'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN ('6','25','27','28') ORDER BY created_at DESC LIMIT 4");
        $data['bep'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN ('8','9','30','31') ORDER BY created_at DESC LIMIT 4");
        $data['lam_me'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN ('11','15','29') ORDER BY created_at DESC LIMIT 4");
        $data['life_style'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 22 ORDER BY created_at DESC LIMIT 4");
        $data['tam'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 23 ORDER BY created_at DESC LIMIT 4");
        $data['tieu_dung'] = $this->Madmin->query_sql($select . " AND chuyenmuc IN ('38','39') ORDER BY created_at DESC LIMIT 4");
        $data['giai_tri'] = $giai_tri =  $this->Madmin->query_sql($select . " AND chuyenmuc = 40 ORDER BY created_at DESC LIMIT 4");
        $data['phong_su'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 41 ORDER BY created_at DESC LIMIT 4");
        $data['ban_doc'] =  $this->Madmin->query_sql($select . " AND chuyenmuc = 42 ORDER BY created_at DESC LIMIT 4");
        $data['mat_ngu'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 46 ORDER BY created_at DESC LIMIT 4");
        $data['yolo'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 47 ORDER BY created_at DESC LIMIT 4");
        $data['nhac'] = $this->Madmin->query_sql($select . " AND chuyenmuc = 48 ORDER BY created_at DESC LIMIT 4");
        $where = '';
        foreach ($giai_tri as $val) {
            $where .=  ' AND ' . ' id != ' .  $val['id'];
        }
        $data['blog_new'] =  $this->Madmin->query_sql($select . " ORDER BY updated_at DESC LIMIT 5");
        $data['blog_view'] =  $this->Madmin->query_sql($select . " ORDER BY view DESC LIMIT 5");
        $data['meta_title'] = 'Góc nhìn đa chiều phụ nữ Việt Nam - Phụ Nữ Plus';
        $data['meta_des'] = 'Phụ Nữ Plus là trang web chia sẻ kiến thức và kinh nghiệm hữu ích dành cho phụ nữ hiện đại. Đây như một cuốn cẩm nang giúp chị em có thêm nhiều bí kíp về tình yêu, sức khỏe, làm đẹp, chuyện vào bếp hay đi du lịch,… Phụ Nữ Plus hứa hẹn sẽ mang đến những thông tin chính xác, hữu ích nhất cho cuộc sống của chị em!';
        $data['content'] = 'home';
        $data['list_js'] = [
            'slick.min.js',
            'home.js',
        ];
        $data['list_css'] = [
            'slick.css',
            'slick-theme.css',
            'home.css'
        ];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function chuyenmuc($alias)
    {
        $time = time();
        $alias = trim($alias);
        $alias_new = alias_301($alias);
        if ($alias != $alias_new) {
            redirect('/' . $alias_new . '/', 'location', 301);
        }
        $data['canonical'] = base_url() . $alias . '/';
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        if ($author == null) {
            $chuyenmuc = $this->Madmin->get_by(['alias' => $alias], 'category');
            if ($chuyenmuc == null) {
                $page = $this->Madmin->query_sql_row("SELECT * FROM blogs WHERE type = 1 AND alias = '$alias' ");
                if ($page == null) {
                    $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE type = 0 AND index_blog = 1 AND time_post<= $time AND blogs.alias = '$alias' ");
                    if ($blog == null) {
                        $tags = $this->Madmin->get_by(['alias' => $alias], 'tags');
                    }
                }
            }
        }

        $data['blog_new'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY updated_at DESC LIMIT 5");
        $data['blog_view'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY view DESC LIMIT 5");
        if (isset($chuyenmuc) && $chuyenmuc != null) { //chuyenmuc
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            if ($chuyenmuc['parent'] == 0) { //chuyen muc to
                $count_or['cate_parent'] = $chuyenmuc['id'];
                $cate_con = $this->Madmin->query_sql("SELECT * FROM category WHERE parent = $chuyenmuc[id]");
                $data['cate_con'] = $cate_con;
                $data['cate_to'] = $chuyenmuc;
            } else {
                $cate_to = $this->Madmin->query_sql_row("SELECT * FROM category WHERE id = $chuyenmuc[parent] ");
                $data['cate_to'] = $cate_to;
                $data['cate_con'] = $this->Madmin->query_sql("SELECT * FROM category WHERE parent = $cate_to[id]");
            }
            $where_cate = $this->search_cate($chuyenmuc['id'], $chuyenmuc['level']);
            $cate = $this->Madmin->get_by(['id' => $chuyenmuc['parent']], 'category');
            $data['cate'] = $cate;
            if ($cate != null && $cate['parent'] > 0) {
                $cate_parent = $this->Madmin->get_by(['id' => $cate['parent']], 'category');
                $data['cate_parent'] = $cate_parent;
            }
            $data['blog'] = $this->Madmin->get_limit_or("index_blog = 1 AND type = 0 AND time_post <= $time", $where_cate, 'blogs', 0, 18);
            $data['chuyenmuc'] = $chuyenmuc['id'];
            $data['meta_title'] = $chuyenmuc['meta_title'];
            $data['meta_des'] = $chuyenmuc['meta_des'];
            $data['meta_key'] = $chuyenmuc['name'];
            $data['content'] = 'chuyenmuc_blog';
            $data['list_js'] = [
                'chuyenmuc_blog.js',
            ];
            $data['list_css'] = [
                'chuyenmuc_blog.css',
            ];
            $data['index'] = 1;
        } else if (isset($blog) && $blog != null) { // blog
            if ($blog['id'] > 1000) {
                return $this->detail_blog_new($blog['id']);
            } else {
                $alias = $alias . '/';
                return $this->detail_blog($blog, $alias);
            }
        } else if (isset($tags) && $tags != null) {
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            $id_parent = $tags['id'];
            $list_tag = $this->Madmin->query_sql("SELECT *  FROM tags  WHERE parent = $id_parent ");
            $where = '  FIND_IN_SET(' . $id_parent . ',tag) ';
            foreach ($list_tag as $key => $val) {
                $where .= ' OR FIND_IN_SET(' . $val['id'] . ',tag) ';
            }
            $page = $this->uri->segment(3);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 18;
            $start = $limit * ($page - 1);
            $count = $this->Madmin->query_sql("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND ( $where ) ");
            pagination('/' . $tags['alias'], count($count), $limit);
            $data['blog'] = $this->Madmin->query_sql("SELECT * FROM blogs  WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND ( $where ) ORDER BY id DESC LIMIT $start,$limit");
            $data['title_page'] = $tags['name'];
            $data['meta_title'] = $tags['meta_title'];
            $data['meta_des'] = $tags['meta_des'];
            $data['meta_key'] = $tags['meta_key'];
            $data['content_tag'] = $tags['content'];
            $data['tag_id'] = $tags['id'];
            $data['canonical'] = base_url() . $alias . '/';
            $data['content'] = 'tag';
            $data['list_js'] = [
                'tag.js',
            ];
            $data['list_css'] = [
                'css_tag.css',
            ];
            $data['index'] = 1;
        } else if (isset($author) && $author != null) {
            return $this->author($alias);
        } else if (isset($page) && $page != null) {
            return $this->page($page);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
        $this->load->view('index', $data);
    }
    public function search_cate($id, $level)
    {
        $where = " chuyenmuc = $id OR cate_parent = $id ";
        if ($level != 3) {
            $cate = $this->Madmin->query_sql("SELECT id,parent,level FROM category WHERE parent = $id ");
            if ($cate != null) {
                foreach ($cate as $key => $val) {
                    $id_cate = $val['id'];
                    $where .= " OR chuyenmuc = $id_cate ";
                    if ($val['level'] != 3) {
                        $cate_2 = $this->Madmin->query_sql("SELECT id,parent,level from category WHERE parent = {$val['id']} ");
                        if ($cate_2 != null) {
                            foreach ($cate_2 as  $val2) {
                                $id_cate = $val2['id'];
                                $where .= " OR chuyenmuc = $id_cate ";
                            }
                        }
                    }
                }
            }
        }
        return $where;
    }
    public function detail_blog_new($id)
    {
        $time = time();
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE  type = 0 AND index_blog = 1 AND time_post<= $time AND blogs.id = $id ");
        if ($blog != null && $id > 1000) {
            $alias = $blog['alias'] . '-c' . $id . '.html';
            $this->detail_blog($blog, $alias);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
    }
    public function detail_blog($blog, $alias)
    {
        $id = $blog['id'];
        $time = time();

        if ($_SERVER['REQUEST_URI'] != '/' . $alias) {
            redirect('/' . $alias, 'location', 301);
        }
        $data['blog_new'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY updated_at DESC LIMIT 5");
        $data['blog_view'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY view DESC LIMIT 5");
        //add view
        $this->Madmin->add_view(['id' => $id]);
        $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc = {$blog['chuyenmuc']} AND index_blog = 1 AND type = 0 AND time_post <= $time AND id !=$id  ORDER BY updated_at DESC LIMIT 6");
        $cate = $this->Madmin->query_sql_row("SELECT name,alias,parent FROM category  WHERE id = {$blog['chuyenmuc']} ");
        $data['cate'] = $cate;
        if ($cate != null && $cate['parent'] > 0) {
            $cate_parent = $this->Madmin->query_sql_row("SELECT name,alias,parent FROM category  WHERE id = {$cate['parent']} ");
            $data['cate_parent'] = $cate_parent;
            if ($cate != null && $cate_parent['parent'] > 0) {
                $cate_parent_2 = $this->Madmin->query_sql_row("SELECT name,alias,parent  FROM category  WHERE id = {$cate_parent['parent']} ");
                $data['cate_parent_2'] = $cate_parent_2;
            }
        }
        if ($blog['author_id'] > 0) {
            $author = $this->Madmin->get_by(['id' => $blog['author_id']], 'admin');
            if ($author != null) {
                $data['author'] = $author;
            }
        }
        $data['blog'] = $blog;
        $data['content'] = 'detail_blog';
        $data['list_js'] = [
            'jquery.toc.min.js',
            'detail_blog.js',
        ];
        $data['list_css'] = [
            'detail_blog.css',
        ];
        $data['meta_title'] = $blog['meta_title'];
        $data['meta_des'] = $blog['meta_des'];
        $data['meta_key'] = $blog['meta_key'];
        $data['meta_img'] = $blog['image'];
        $data['canonical'] = base_url() . $alias;
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function author($alias)
    {
        $author = $this->Madmin->get_by(['alias' => $alias], 'admin');
        if ($author == null) {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        } else {
            $time = time();
            if ($_SERVER['REQUEST_URI'] != '/' . $author['alias'] . '/') {
                redirect('/' . $author['alias'] . '/', 'location', 301);
            }
            $blog = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND author_id = '{$author['id']}' LIMIT 20");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY updated_at DESC LIMIT 5");
            $data['blog_view'] = $this->Madmin->query_sql("SELECT id,title,alias FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time  ORDER BY view DESC LIMIT 5");
            $data['blog'] = $blog;
            $data['author'] = $author;
            $data['list_js'] = [
                'jquery.toc.min.js',
                'author.js',
            ];
            $data['list_css'] = [
                'author.css',
            ];
            $data['meta_title'] = $author['name'] . " - Tác giả tại PhuNuPlus";
            $data['meta_des'] = $author['name'] . " - Tác giả tại PhuNuPlus";
            $data['meta_key'] = $author['name'] . " - Tác giả tại PhuNuPlus";
            $data['meta_img'] = $author['image'];
            $data['index'] = 1;
            $data['content'] = 'author';
            $this->load->view('index', $data);
        }
    }
    public function import_file()
    {
        $data['content'] = 'get_blog';
        $this->load->view('index', $data);
    }
    public function test()
    {
        $url_post = $this->input->post('url_blog');
        error_reporting(0);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL =>  $url_post,
            CURLOPT_USERAGENT => 'XuanThuLab test cURL Request',
            CURLOPT_SSL_VERIFYPEER => false,
        ));
        $alias = str_replace('https://phunuplus.vn/', '', $url_post);
        $resp = curl_exec($curl);
        $data['data_content'] = $resp;
        $data['alias_url'] = str_replace('/', '', $alias);
        $data['content'] = 'get_content';
        $this->load->view('index', $data);
    }
    public function add_blog()
    {
        $data['title'] = $this->input->post('h1');
        $data['alias'] = $alias =  $this->input->post('alias');
        $data['meta_title'] = $this->input->post('title');
        $data['meta_des']     = $this->input->post('des');
        $data['updated_at'] = strtotime($this->input->post('date'));
        $data['created_at'] = strtotime($this->input->post('date'));
        $content = $this->input->post('content');
        $img = $this->input->post('img');
        $list_img = explode(',', $this->input->post('list_img'));
        $url_cate = $this->input->post('url_cate');
        $url_cate_new = str_replace('https://phunuplus.vn/category/', '', $this->input->post('url_cate'));
        $alias_cate = str_replace('/', '', $url_cate_new);
        $text_cate = $this->input->post('text_cate');
        $url_cate_child = str_replace($url_cate, '', $this->input->post('url_cate_child'));
        $alias_cate_child = str_replace('/', '', $url_cate_child);
        $text_cate_child = $this->input->post('text_cate_child');
        $where_blog = [
            'alias' =>  $alias
        ];
        $blog = $this->Madmin->get_by($where_blog, 'blogs');
        if ($blog == null) {
            $where_cate = [
                'alias' => $alias_cate,
                'parent' => 0
            ];
            $cate = $this->Madmin->get_by($where_cate, 'category');
            if ($cate != null) {
                $id_cate = $cate['id'];
            } else {
                $data_insert_cate = [
                    'name' => $text_cate,
                    'alias' => $alias_cate,
                    'meta_title' => $text_cate . " - Phụ Nữ Plus"
                ];
                $id_cate = $this->Madmin->insert($data_insert_cate, 'category');
            }
            $where_cate_child = [
                'alias' => $alias_cate_child,
                'parent' => $id_cate
            ];
            $cate_child = $this->Madmin->get_by($where_cate_child, 'category');
            if ($cate_child != null) {
                $id_cate_child = $cate_child['id'];
            } else {
                $data_insert_cate_child = [
                    'name' => $text_cate_child,
                    'alias' => $alias_cate_child,
                    'parent' => $id_cate,
                    'meta_title' => $text_cate_child . " - Phụ Nữ Plus"
                ];
                $id_cate_child = $this->Madmin->insert($data_insert_cate_child, 'category');
            }
            foreach ($list_img as $val) {
                if ($val != '') {
                    $this_val = explode('/', $val);
                    $name_img =  array_pop($this_val);
                    $new_name = 'assets/img_blog/images/' . $name_img;
                    copy($val, $new_name);
                    $content = str_replace($val, '/' . $new_name, $content);
                }
            }
            $data['content'] = $content;
            $data['chuyenmuc'] = $id_cate_child;
            $data['cate_parent'] = $id_cate;
            // copy($img, 'upload/blog/' . $alias . '.jpg');
            // $data['image']     =  'upload/blog/' . $alias . '.jpg';

            $insert_blog = $this->Madmin->insert($data, 'blogs');
            $response = [
                'status' => 1,
            ];
        } else {
            $response = [
                'status' => 0,
            ];
        }
        echo json_encode($response);
    }
    public function file_excel()
    {
        error_reporting(0);
        require_once(APPPATH . 'libraries/PHPExcel.php');
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $url_old = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $url = str_replace('https://phunuplus.vn/', '', $url_old);
                    $url = str_replace('/', '', $url);
                    $where_blog = [
                        'alias' =>  $url
                    ];
                    $blog = $this->Madmin->get_by($where_blog, 'blogs');
                    // if ($blog = null) {
                    echo $url_old . '---- ' . $blog['alias'] . '/ ,  ';
                    // die;
                    // }
                }
                //var_dump($re_cv);die();
            }
        }
    }
    function page($page)
    {
        if ($_SERVER['REQUEST_URI'] != '/' . $page['alias'] . '/') {
            redirect('/' . $page['alias'] . '/', 'location', 301);
        }
        $data['page'] = $page;
        $data['content'] = 'page';
        $data['list_css'] = [
            'page.css'
        ];
        $data['meta_title'] = $page['meta_title'];
        $data['meta_des'] = $page['meta_des'];
        $data['meta_key'] = $page['meta_key'];
        $data['meta_img'] = $page['image'];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
}
