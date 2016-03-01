<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips_model extends CI_model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addTrip($data)
	{
		if ($data) {
			if ($this->db->insert('trips', $data)) {
				return true;
			} else {
				return false;
			}

		} else {
			return false;
		}
	}

	public function getTrips($data)
	{
		if ($data) {
			$this->db->select('*');
			$this->db->where('departure_point', $data['departure_point']);
			$this->db->where('arrival_point', $data['arrival_point']);
			$this->db->where('Date("start_time")', $data['date']);

			$q = $this->db->get('trips');
			
			if ($q->num_rows() > 0) {
				return $q->result();
			} else {
				return false;
			}

		} else {
			return false;
		}
	}

	public function updateTrips($id, $data = array()) {
        if ($this->db->update('gift_cards', $data, array('id' => $id))) {
            return true;
        }
        return false;
    }

    public function deleteTrips($id) {
        if ($this->db->delete('gift_cards', array('id' => $id))) {
            return true;
        }
        return FALSE;
    }

}