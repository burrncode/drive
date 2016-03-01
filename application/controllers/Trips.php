<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends My_Controller {

	function __construct() {
        parent::__construct();
        $this->lang->load('auth', $this->Settings->language);
        $this->load->library('form_validation');

        $this->load->model('trips_model');
    }

    public function search() 
    {
        $this->data['page_title'] = lang('search_trips');

        $this->form_validation->set_rules('departure_point', lang('departure_point'), 'required');
        $this->form_validation->set_rules('arrival_point', lang('arrival_point'), 'required');
        $this->form_validation->set_rules('date', lang('date'), 'required');

        $this->data['departure_point'] = $this->input->post('departure_point'); 
        $this->data['arrival_point'] = $this->input->post('arrival_point'); 
        $this->data['date'] = $this->input->post('date'); 


        if ($this->form_validation->run() == true) {
            $this->data['results'] = $this->trips_model->getTrips($this->data);

            if (count($this->data['results']) > 0) {
                $this->data['message'] = lang('success');
                $this->page_construct('trips/search_list', $this->data);
            } else {
                $this->data['error'] = lang('no_data');
                $this->page_construct('trips/search', $this->data);
            }
        } else {
            if (validation_errors()) {
                $this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');            
            }

            $this->page_construct('trips/search', $this->data);
        }

    }

    public function get_trips()
    {

        $departure_point = $this->input->get('departure_point') ? $this->input->get('departure_point') : NULL;
        $arrival_point = $this->input->get('arrival_point') ? $this->input->get('arrival_point') : NULL;
        $date = $this->input->get('date') ? $this->input->get('date') : NULL;

        $this->load->library('datatables');
        $this->datatables
        ->select("departure_point, arrival_point, price, start_time, seats", FALSE)
        ->from("trips");

        if ($departure_point) {
            $this->datatables->where('departure_point', $departure_point);
        }
      
        if ($arrival_point) {
            $this->datatables->where('arrival_point', $arrival_point);
        }
      
        if ($date) {
            $this->datatables->where('Date("start_date")', $date);
        }
        
        $this->datatables->add_column("Actions", "<div class='text-center'><i class='fa fa-plus'></i></div>");

        echo $this->datatables->generate();

    }

    public function offer()
    {
    	$this->data['page_title'] = lang('offer');

        $this->form_validation->set_rules('departure_point', lang('departure_point'), 'required');
        $this->form_validation->set_rules('arrival_point', lang('arrival_point'), 'required');
        $this->form_validation->set_rules('price', lang('price'), 'required');
        $this->form_validation->set_rules('car_details', lang('car_details'), 'required');
        $this->form_validation->set_rules('seats', lang('seats'), 'required');

        if ($this->form_validation->run() == true) {

            // start and return journey time formatting 
            $start_time = date('Y-m-d H:i:s', strtotime($this->input->post('leaving_date').' '.$this->input->post('leaving_time')));
            $return_start_time = date('Y-m-d H:i:s', strtotime($this->input->post('return_date').' '.$this->input->post('leaving_time')));

            $data = array (
                    'departure_point'           => $this->input->post('departure_point'),
                    'arrival_point'             => $this->input->post('arrival_point'),
                    'price'                     => $this->input->post('price'),
                    'start_time'                => $start_time,
                    'return_start_time'         => $return_start_time,
                    'isRecurring'               => $this->input->post('isRecurring') ? 1 : 0,
                    'car_details'               => $this->input->post('car_details'),
                    'seats'                     => $this->input->post('seats'),
                    'additional_info'           => $this->input->post('additional_info'),
                );

            if ($this->trips_model->addTrip($data)) {
                $this->data['message'] = lang('successfully_trip_created');
            } else {
                $this->data['error'] = lang('insertion_failed');
            }

        } else {

            $this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');            
        }
        $this->page_construct('trips/index', $this->data);
    }

}