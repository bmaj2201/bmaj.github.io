<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Testimonial';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');

        $data['testimonial'] = $this->db->get('testimonial')->result_array();


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('desk', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('testimonial/index', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path']          = './front-end/assets/img/testimonial/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Gambar anda belum ditambahkan </div>');
                redirect('testimonial');
            } else {
                $gambar     = $this->upload->data();
                $gambar     = $gambar['file_name'];
                $nama       = $this->input->post('nama', true);
                $no_hp      = $this->input->post('no_hp', true);
                $email      = $this->input->post('email', true);
                $pekerjaan  = $this->input->post('pekerjaan', true);
                $desk       = $this->input->post('desk', true);

                $data = [
                    'nama'      => $nama,
                    'image'     => $gambar,
                    'no_hp'     => $no_hp,
                    'email'     => $email,
                    'pekerjaan' => $pekerjaan,
                    'desk'      => $desk,
                    'created_at' => time()
                ];

                $this->db->insert('testimonial', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Testimonial anda sudah berhasil dikirim! Terima kasih atas partisipasi anda! </div>');
                redirect('testimonial');
            }
        }
    }



    public function role()
    {
        $data['title'] = 'ROLE';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }



    public function roleAccess($role_id)
    {
        $data['title'] = 'CV ROLE ACCESS';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }



    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akses telah dirubah !! </div>');
    }




    public function edit_testimonial($id)
    {
        $data['title'] = 'Edit Testimonial';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['testimonial'] = $this->db->get_where('testimonial', ['id' => $id])->row_array();

        // berikan rules untuk mengedit nama user
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('desk', 'Deskripsi', 'required');

        // jalankan form validation
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_testimonial', $data);
            $this->load->view('templates/footer');
        } else {

            $nama       = $this->input->post('nama', true);
            $no_hp      = $this->input->post('no_hp', true);
            $email      = $this->input->post('email', true);
            $pekerjaan  = $this->input->post('pekerjaan', true);
            $desk       = $this->input->post('desk', true);

            //cek jika ada gambar yang akan diupload
            $upload_gambar = $_FILES['image']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|png|jpg';
                $config['max_size'] = 1024;
                $config['upload_path'] = './front-end/assets/img/testimonial/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // hapus gambar user lama
                    $gambar_lama = $data['testimonial']['image'];
                    if ($gambar_lama != 'bg-1.png') {
                        unlink(FCPATH . 'front-end/assets/img/testimonial/' . $gambar_lama);
                    }

                    // upload gambar user baru
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $nama);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('email', $email);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('desk', $desk);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('testimonial');

            // buat flash data agar memberi tahu user bahwa data berhasil diedit
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat, Testimonial anda berhasil diubah! </div>');
            redirect('admin/testimonial');
        }
    }


    public function delete_testimonial($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->delete('testimonial', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Testimonial sudah berhasil dihapus </div>');
        redirect('admin/testtimonial');
    }
}
