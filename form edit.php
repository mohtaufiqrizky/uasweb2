<?php
function form_edit($nim){
    $row = $this->Tbl_kelas_model->get_by_id($nim);
    if ($row) {
        $data = array(
            'nim' => set_value('nim' , $row->nim),
            'nama' => set_value('nama' , $row->nama),
            'jurusan' => set_value('jurusan' , $row->jurusan),
            'alamat' => set_value('alamat' , $row->alamat),
            'username' => set_value('username' , $row->username),
            'password' => set_value('password' , $row->password)
        );
        $this->load->view('form_edit' , $data);
    } else {
        $this->session->set_flashdata('message' , 'Data Tidak ditemukan');
    }
}