<?php


class Smartphone extends MY_Controller
{
    public $isLogin;
    private $table = 'tb_smartphone';
    public function __construct()
    {
        parent::__construct();
        $this->isLogin = $this->is_login();
    }

    public function index()
    {
        $this->set_title_tab();
        $this->set_view_content('pages/smartphone');
        $this->set_data($this->m_general->getAllData($this->table)->result());
        $this->render_view();
    }

    public function form_create()
    {
        $this->set_title_tab("Create");
        $this->set_view_content('pages/smartphone-create');
        $this->render_view();
    }

    public function form_edit($id)
    {
        $this->set_title_tab("Update");
        $this->set_view_content('pages/smartphone-edit');
        $smartphone = $this->m_general->getWhere($this->table, array('kode_smartphone' => $id))->result();
        $this->set_data(array("data_edit" => $smartphone[0]));
        $this->render_view();
    }

    public function create() {
        $kodeSmartphone = time();
        $seriSmartphone = $this->input->post('seri_smartphone');
        $merkSmartphone = $this->input->post('merk_smartphone');
        $ukuranLayar = $this->input->post('ukuran_layar');
        $kameraDepan = $this->input->post('kamera_depan');
        $kameraBelakang = $this->input->post('kamera_belakang');
        $tanggalLaunching = $this->input->post('tanggal_launching');

        $data = array(
            'kode_smartphone' => $kodeSmartphone,
            'seri_smartphone' => $seriSmartphone,
            'merk_smartphone' => $merkSmartphone,
            'ukuran_layar' => $ukuranLayar,
            'kamera_depan' => $kameraDepan,
            'kamera_belakang' => $kameraBelakang,
            'tanggal_launching' => $tanggalLaunching
        );

        $insert = $this->m_general->insert($this->table, $data);
        if ($insert) {
            redirect(base_url('smartphone'));
        }
    }

    public function edit($id) {
        $seriSmartphone = $this->input->post('seri_smartphone');
        $merkSmartphone = $this->input->post('merk_smartphone');
        $ukuranLayar = $this->input->post('ukuran_layar');
        $kameraDepan = $this->input->post('kamera_depan');
        $kameraBelakang = $this->input->post('kamera_belakang');
        $tanggalLaunching = $this->input->post('tanggal_launching');

        $data = array(
            'kode_smartphone' => $id,
            'seri_smartphone' => $seriSmartphone,
            'merk_smartphone' => $merkSmartphone,
            'ukuran_layar' => $ukuranLayar,
            'kamera_depan' => $kameraDepan,
            'kamera_belakang' => $kameraBelakang,
            'tanggal_launching' => $tanggalLaunching
        );

        $update = $this->m_general->update($this->table, $data);
        if ($update) {
            redirect(base_url('smartphone'));
        }
    }

    public function delete($id) {
        $data = array(
            "kode_smartphone" => $id
        );

        $delete = $this->m_general->delete($this->table, $data);
        if ($delete) redirect(base_url('smartphone'));
    }
}