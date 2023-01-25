<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wedding extends CI_Controller
{


    public function index()
    {
        $data = [
            'title' => 'UNDANGAN DIGITAL'
        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['logo_web'] = $this->db->get('logo_web')->result_array();
        $data['hero_image'] = $this->db->get('hero_image')->result_array();
        $data['hero_judul'] = $this->db->get('hero_judul')->result_array();
        $data['banner_1'] = $this->db->get('banner_1')->result_array();
        $data['mempelai'] = $this->db->get('nama_mempelai')->result_array();
        $data['wedding_detail'] = $this->db->get('wedding_detail')->result_array();
        $data['akad'] = $this->db->get('akad')->result_array();
        $data['social_media'] = $this->db->get('social_media')->result_array();
        $data['music'] = $this->db->get('music')->result_array();

        $data['laki'] = $this->db->get('laki-laki')->result_array();

        $data['perempuan'] = $this->db->get('pr')->result_array();

        $data['hitung_mundur'] = $this->db->get('hitung_mundur')->result_array();

        $data['banner_utama'] = $this->db->get('banner_utama')->result_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('hadir_tidak', 'Hadir/Tidak', 'required');
        $this->form_validation->set_rules('makes', 'Makanan Kesukaan', 'required');
        $this->form_validation->set_rules('ucapan', 'Ucapan', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/wedding_header', $data);
            $this->load->view('templates/wedding_navbar', $data);
            $this->load->view('wedding/index', $data);
            $this->load->view('templates/wedding_footer');
        } else {

            $nama           = $this->input->post('nama', true);
            $alamat         = $this->input->post('alamat', true);
            $hadir_tidak    = $this->input->post('hadir_tidak', true);
            $makes          = $this->input->post('makes', true);
            $ucapan         = $this->input->post('ucapan', true);


            $data = [
                'nama'        => $nama,
                'alamat'      => $alamat,
                'hadir_tidak' => $hadir_tidak,
                'makes'       => $makes,
                'ucapan'      => $ucapan
            ];

            $this->db->insert('rsvp', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success font-weight-bold" role="alert">
                Selamat, Ucapan Anda sudah berhasil terkirim! Terima kasih banyak atas ucapan dan doa anda, Semoga anda selalu dalam lindunganNya! </div>');
            redirect('wedding/index');
        }
    }


    public function wedding_invitation_2()
    {
        $data = [
            'title' => 'Wedding_Invitation_2',
            'title1' => 'Anya & Rudi'
        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/wedding_header', $data);
        $this->load->view('templates/wedding_navbar', $data);
        $this->load->view('wedding/wedding_invitation_2', $data);
        $this->load->view('templates/wedding_footer');
    }



    public function wedding_invitation_3()
    {
        $data = [
            'title' => 'Wedding_Invitation_3',
            'title1' => 'Anya & Rudi'
        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/wedding_header', $data);
        $this->load->view('templates/wedding_navbar', $data);
        $this->load->view('wedding/wedding_invitation_3', $data);
        $this->load->view('templates/wedding_footer');
    }



    public function wedding_invitation_4()
    {
        $data = [
            'title' => 'Wedding_Invitation_4',
            'title1' => 'Anya & Rudi'
        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/wedding_header', $data);
        $this->load->view('templates/wedding_navbar', $data);
        $this->load->view('wedding/wedding_invitation_4', $data);
        $this->load->view('templates/wedding_footer');
    }


    public function wedding_invitation_5()
    {
        $data = [
            'title' => 'Wedding_Invitation_5',
            'title1' => 'Anya & Rudi'
        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/wedding_header', $data);
        $this->load->view('templates/wedding_navbar', $data);
        $this->load->view('wedding/wedding_invitation_5', $data);
        $this->load->view('templates/wedding_footer');
    }
}
