<?php
class Ctrl extends CI_Controller {
    public function index()
    {
    $this->load->view("login.php");
    }

    function AfficherRegion()
    {
        $idActivite = $_GET['idActivite'];
        $this->load->model('ModelRegion');
        $data['lesRegions'] = $this->ModelRegion->getRegionByStatut($nom);
        $this->load->view('region', $data);
    }
    
}
?>