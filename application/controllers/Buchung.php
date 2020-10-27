<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Buchung extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - Buchung";
		return($data);
		}
			
    public function index(){
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1";
        $data['title'] .= ' - Buchung';
        $data['pageHeadline'] = "<small><i class=\"far fa-dot-circle\"></i> Lasergame buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function einzelspiel(){
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589738049403&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1&subcategory=10";
        $data['pageHeadline'] = "<small><i class=\"far fa-dot-circle\"></i> Lasergame Einzelspiel buchen</small>";
        $data['title'] .= ' - EinzelSpiele';
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function fuenferticket(){
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1&subcategory=9";
        $data['pageHeadline'] = "<small><i class=\"far fa-dot-circle\"></i> Lasergame 5er Ticket buchen</small>";
        $data['title'] .= ' - 5er Ticket';
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function allyoucantag(){
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1&subcategory=9";
        $data['pageHeadline'] = "<small><i class=\"far fa-dot-circle\"></i> Lasergame ALL-YOU-CAN-TAG buchen</small>";
        $data['title'] = ' - All You Can Tag';
        $data['main_content'] = 'buchung/buchung_content';
    }
	
    public function kindergeburtstagBasic() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=15";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> BASIC <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagMaxi() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> MAXI <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }
	
    public function kindergeburtstagXXL() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?t=1589739925898&grp=649f4273-c7fc-4923-aaa1-bbeb4bbf9995&category=1";
		$data['pageHeadline'] = "<small><i class=\"fas fa-birthday-cake\"></i> Kindergeburtstag</small> XXL <small>buchen</small>";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function offline() { 
		$data=$this->meta4all($this->meta);      
        $data['title'] .= ' - Buchungssystem offline';
        $data['main_content'] = 'buchung/buchung_offline';
        $this->load->view('template', $data);
    }


}