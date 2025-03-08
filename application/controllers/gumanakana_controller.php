<?php

class gumanakana_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('gumanakana_model');
    }

    public function index() {
        $data['items'] = $this->gumanakana_model->get_data();
        $this->load->view('Home', $data);
    }

    public function add_item() {
        $data = array(
            'Fullname' => $this->input->post('Fullname'),
            'contact_number' => $this->input->post('contact_number'),
            'reservation_date' => $this->input->post('reservation_date'),
            'arrival_time' => $this->input->post('arrival_time'),
            'departure_time' => $this->input->post('departure_time')
        );

        $this->gumanakana_model->add_data($data);
        redirect(site_url('gumanakana_controller'));
    }
    

    public function delete() {
        $id = $this->input->post('ID');
        $this->gumanakana_model->add_data($data);
        redirect(base_url('gumanakana_controller'));
    }

    public function page() {
        $this->load->view('Add');
    }
}
?>
