<?php
  defined('BASEPATH') OR exit('No direct script acces allowed');

  class pelanggan_model extends CI_Model{
    public function SaveDataPelanggan()
    {
      $data = array(
        "nama_pembeli" => $this->input->post('Namapelangan'),
        "alamat" => $this->input->post('Alamat'),
        "no_telp" => $this->input->post('NoTelp'),
        "username" => $this->input->post('Username'),
        "password" => $this->input->post('Password')
      );

      $this->db->insert('pembeli',$data);
      if($this->db->afected_rows() > 0) {
        return TRUE;
      } else{
        return FALSE;
      }
    }


  public function getDataPelanggan()
  {
    return $this->db->order_by('id_pembeli','asc')
                    ->get('pembeli')
                    ->result();
  }

  public function UpdateDataPelanggan(){
    $data = array(
      "nama_pembeli" => $this->input->post('Namapelangan'),
      "alamat" => $this->input->post('Alamat'),
      "no_telp" => $this->input->post('NoTelp'),
      "username" => $this->input->post('Username'),
      "password" => $this->input->post('Password')
    );

    $this->db->update('pembeli',$data);
  }
}
 ?>
