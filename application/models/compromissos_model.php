<?php


class compromissos_model extends CI_Model 
{
    //lista compromisssos  
    public function listaCompromissos(){
        return $this->db->get("compromisso")->result_array();
    }

    //adiciona  compromissos

    public function addCompromisso($compromisso){
            $this->db->insert('compromisso',$compromisso);
    }
    //adiciona id no banco
    public function addid($id){
    
        return $this->db->update('tabelaid',$id);
    }
     //lista id salvo 
     public function listaid(){
        return $this->db->get("tabelaid")->result_array();
    }

    //excluir

    public function deletar_compromissos($id) {
    
        $this->db->where('id', $id);
        return $this->db->delete('compromisso');
    }


   public function save(){
    
        $this->db->where('id',$compromisso['id']);
         return $this->db->update('compromisso',$compromisso);
    }

}
