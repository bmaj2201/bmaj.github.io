<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - HOME',
            'desktop' => 'UNDANGAN DIGITAL',
            'mobile'  => 'UNDANGAN DIGITAL'
        ];

        $data['page_template'] = $this->db->get('page_template')->result_array();

        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();

        $data['instagram'] = $this->db->get('instagram')->result_array();

        $data['testimonial'] = $this->db->get('testimonial')->result_array();

        $data['sponsor'] = $this->db->get('sponsor')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();
        $data['promo'] = $this->db->get('promo')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('templates/home_sidebar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home_footer', $data);
    }


    public function contact()
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - CONTACT',
            'desktop' => 'UNDANGAN DIGITAL -  CONTACT',
            'mobile'  => 'UNDANGAN DIGITAL'
        ];


        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();

        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/contact', $data);
        $this->load->view('templates/home_footer', $data);
    }



    public function template()
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - TEMPLATE',
            'desktop' => 'UNDANGAN DIGITAL - GALLERY',
            'mobile'  => 'UNDANGAN DIGITAL - TEMPLATE',
            'page'    => 'Template Invitation'
        ];

        $data['page_template'] = $this->db->get('page_template')->result_array();

        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();


        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/template', $data);
        $this->load->view('templates/home_footer', $data);
    }



    public function invitation()
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - INVITATION',
            'desktop' => 'UNDANGAN DIGITAL -  INVITATION',
            'mobile'  => 'UNDANGAN DIGITAL - INVITATION',
            'page'    => 'Wedding Invitation'
        ];

        $data['page_template'] = $this->db->get('page_template')->result_array();


        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();


        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/invitation', $data);
        $this->load->view('templates/home_footer', $data);
    }


    // detail invitation
    public function wedding_invitation($slug)
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - INVITATION SHOP',
            'desktop' => 'UNDANGAN DIGITAL - SHOP',
            'mobile'  => 'UNDANGAN DIGITAL - SHOP',
            'page'    => 'Wedding Invitation Shop'
        ];

        $data['page_template'] = $this->db->get_where('page_template', ['slug' => $slug])->row_array();


        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/wedding_invitation', $data);
        $this->load->view('templates/home_footer', $data);
    }



    public function checkout($slug)
    {
        $data = [
            'title'   => 'UNDANGAN DIGITAL - CHECKOUT',
            'desktop' => 'UNDANGAN DIGITAL - CHECKOUT',
            'mobile'  => 'UNDANGAN DIGITAL - CHECKOUT',
            'page'    => 'Wedding Invitation Checkout'
        ];

        $data['page_template'] = $this->db->get_where('page_template', ['slug' => $slug])->row_array();
        $data['pembayaran'] = $this->db->get('pembayaran')->result_array();

        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['contact'] = $this->db->get('contact')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();
        $data['instagram'] = $this->db->get('instagram')->result_array();
        $data['logo_web'] = $this->db->get('logo_web')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/checkout', $data);
        $this->load->view('templates/home_footer', $data);
    }






    public function cv()
    {
        $data['title'] = 'Wedding Digital - 1';
        $this->load->model('Datacv_model', 'datacv');

        // load libraty
        // $this->load->library('pagination');

        // config
        $config['base_url'] = 'http://localhost/sistemlogin/home/cvcreator/index';
        $config['total_rows'] = $this->datacv->hitungSemuaCv();
        $config['per_page'] = 4;

        // styling paginations
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li></a>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        //  inisialisasi pagination berdasarkan config
        $this->pagination->initialize($config);


        $this->db->order_by('id', 'DESC');
        $data['start'] = $this->uri->segment(4);
        $data['datacv'] = $this->datacv->getdatacv($config['per_page'], $data['start']);
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/cv', $data);
        $this->load->view('templates/home_footer');
    }


    public function demoweb()
    {
        $data = [
            'title' => 'DEMO PROJECT',
            'list' => [
                'Responsive',
                'Full CRUD',
                'Modern Templates',
                'Database'
            ]
        ];


        $data['datacv'] = $this->db->get('data_cv')->result_array();

        $data['demoweb'] = $this->db->get('demo_web')->result_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/demoweb', $data);
        $this->load->view('templates/home_footer');
    }


    public function privacypolicy()
    {
        $data['title'] = 'PRIVACY POLICY';
        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/privacypolicy', $data);
        $this->load->view('templates/home_footer');
    }

    public function carikerja()
    {
        $data['title'] = 'Template';

        // load model
        $this->load->model('Carikerja_model', 'carikerja');

        // config
        $config['base_url'] = 'http://localhost/sistemlogin/home/carikerja/index';
        $config['total_rows'] = $this->carikerja->hitungSemuaDatakerja();
        $config['per_page'] = 3;

        // Styling pagination
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li></a>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        // inisialisasi
        $this->pagination->initialize($config);


        $this->db->order_by('id', 'DESC');
        $data['start'] = $this->uri->segment(4);
        $data['carikerja'] = $this->carikerja->getcarikerja($config['per_page'], $data['start']);


        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/carikerja', $data);
        $this->load->view('templates/home_footer');
    }


    public function detail($id)
    {
        $data['title'] = 'DETAIL CV';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datacv'] = $this->db->get_where('data_cv', ['id' => $id])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/detailcv', $data);
        $this->load->view('templates/home_footer');
    }

    public function detailkerja($id)
    {
        $data['title'] = 'DETAIL LOWONGAN KERJA';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/detailkerja', $data);
        $this->load->view('templates/home_footer');
    }

    public function preview()
    {
        $data['title'] = 'Preview';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['page_template'] = $this->db->get('page_template')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('home/preview', $data);
        $this->load->view('templates/home_footer');
    }
}
