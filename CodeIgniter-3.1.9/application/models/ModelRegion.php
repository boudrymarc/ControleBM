<?php
class ModelRegion extends CI_Model
{
    public function getRegionByStatut($nom)
    {
        if($nom==admin){
        $sql = $this->db->get('nomRegion');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    } 
        else{
        $sql = $this->db->get('nomRegion');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
}
