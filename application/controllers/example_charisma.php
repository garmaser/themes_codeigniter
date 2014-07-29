<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Example_charisma extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
    }

    private function _init() {
        $this->output->set_output_data('menu', $this->_menu());    // envia los datos de menu a la vista default
        $this->output->set_template('charisma');

//		$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
//		$this->load->js('assets/themes/default/hero_files/bootstrap-transition.js');
//		$this->load->js('assets/themes/default/hero_files/bootstrap-collapse.js');
    }
    
    private function _menu() {
        $menu = array();
        $menu[] = array('link' => null, 'nombre' => 'Main', 'icono' => null);
        $menu[] = array('link' => site_url('example_charisma/index'),       'nombre' => 'Dashboard',        'icono' => 'icon-home');
        $menu[] = array('link' => site_url('example_charisma/ui'),          'nombre' => 'UI Features',      'icono' => 'icon-eye-open');
        $menu[] = array('link' => site_url('example_charisma/form'),        'nombre' => 'Forms',            'icono' => 'icon-edit');
        $menu[] = array('link' => site_url('example_charisma/chart'),       'nombre' => 'Charts',           'icono' => 'icon-list-alt');
        $menu[] = array('link' => site_url('example_charisma/typography'),  'nombre' => 'Typograpy',        'icono' => 'icon-font');
        $menu[] = array('link' => site_url('example_charisma/gallery'),     'nombre' => 'Gallery',          'icono' => 'icon-picture');
        
        $menu[] = array('link' => null, 'nombre' => 'Sample Section', 'icono' => null);        
        $menu[] = array('link' => site_url('example_charisma/calendar'),    'nombre' => 'Calendar',         'icono' => 'icon-calendar');
        $menu[] = array('link' => site_url('example_charisma/grid'),        'nombre' => 'grid',             'icono' => 'icon-th');
        $menu[] = array('link' => site_url('example_charisma/file_manager'),'nombre' => 'File Manager',     'icono' => 'icon-folder-open');
        $menu[] = array('link' => site_url('example_charisma/tour'),        'nombre' => 'Tour',             'icono' => 'icon-globe');
        $menu[] = array('link' => site_url('example_charisma/icon'),        'nombre' => 'Icons',            'icono' => 'icon-star');
        $menu[] = array('link' => site_url('example_charisma/error'),       'nombre' => 'Error Page',       'icono' => 'icon-ban-circle');
        $menu[] = array('link' => site_url('example_charisma/login'),       'nombre' => 'Login Page',       'icono' => 'icon-lock');
        return ($menu);
    }
    public function docente() {
        $this->load->view('charisma/docente');
    }
    public function index() {
        $this->load->view('charisma/index');
    }

    public function ui() {
        $this->load->view('charisma/ui');
    }

    public function form() {
        $this->load->view('charisma/form');
    }

    public function chart() {
        $this->load->view('charisma/chart');
    }

    public function typography() {
        $this->load->view('charisma/typography');
    }

    public function gallery() {
        $this->load->view('charisma/gallery');
    }

    public function table() {
        $this->load->view('charisma/table');
    }

    public function calendar() {
        $this->load->view('charisma/calendar');
    }

    public function grid() {
        $this->load->view('charisma/grid');
    }

    public function file_manager() {
        $this->load->view('charisma/file-manager');
    }

    public function tour() {
        $this->load->view('charisma/tour');
    }

    public function icon() {
        $this->load->view('charisma/icon');
    }

    public function error() {
        $this->output->unset_template();
        $this->load->view('charisma/error');
    }

    public function login() {
        $output['no_visible_elements'] = true;
        $this->load->view('charisma/login', $output);
    }

}
