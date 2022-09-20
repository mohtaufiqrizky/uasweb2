<?php
function aksi_simpan(){
    $data = array(
        'nama' => $this->input->post('nama'),
        'nim'  => $this->input->post('nim'),
        'jurusan' =>$this->input->post('jurusan'),
        'alamat' =>$this->input->post('alamat'),
        'username' =>$this->input->post('namauser'),
        'password' =>md5($this->input->post('password'))
        );
        $this->Tbl_kelas_model->insert($data);
        redirect('kelas/index');
}
?>