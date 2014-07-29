<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Example_charisma extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
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
        $menu[] = array('link' => site_url('example_charisma/offices_management'),       'nombre' => 'Office',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/calendar'),    'nombre' => 'Calendar',         'icono' => 'icon-calendar');
        $menu[] = array('link' => site_url('example_charisma/grid'),        'nombre' => 'grid',             'icono' => 'icon-th');
        $menu[] = array('link' => site_url('example_charisma/file_manager'),'nombre' => 'File Manager',     'icono' => 'icon-folder-open');
        $menu[] = array('link' => site_url('example_charisma/tour'),        'nombre' => 'Tour',             'icono' => 'icon-globe');
        $menu[] = array('link' => site_url('example_charisma/icon'),        'nombre' => 'Icons',            'icono' => 'icon-star');
        $menu[] = array('link' => site_url('example_charisma/error'),       'nombre' => 'Error Page',       'icono' => 'icon-ban-circle');
        $menu[] = array('link' => site_url('example_charisma/login'),       'nombre' => 'Login Page',       'icono' => 'icon-lock');
        
        $menu[] = array('link' => null, 'nombre' => 'Grocery Crud', 'icono' => null);
        $menu[] = array('link' => site_url('example_charisma/offices_management'),       'nombre' => 'Office',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/employees_management'),       'nombre' => 'Employees',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/customers_management'),       'nombre' => 'Customers',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/orders_management'),       'nombre' => 'Orders',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/products_management'),       'nombre' => 'Products',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/film_management'),       'nombre' => 'Film',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/film_management_twitter_bootstrap'),       'nombre' => 'Film (bootstrap)',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/multigrids'),       'nombre' => 'Multigrids',           'icono' => 'icon-align-justify');
        $menu[] = array('link' => site_url('example_charisma/docente'),       'nombre' => 'Docente',           'icono' => 'icon-align-justify');

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
    
    public function offices_management()
	{
//		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			//$this->_example_output($output);
                         $this->load->view('charisma/grocerycrud', $output);

//		}catch(Exception $e){
//			show_error($e->getMessage().' --- '.$e->getTraceAsString());
//		}
	}

	public function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->load->view('charisma/grocerycrud', $output);
	}

	public function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->load->view('charisma/grocerycrud', $output);
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->load->view('charisma/grocerycrud', $output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));
                        
                        $crud->required_fields('productName','productCode');
                        
			$output = $crud->render();

			$this->load->view('charisma/grocerycrud', $output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->load->view('charisma/grocerycrud', $output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
                        $output->titulo = 'Titulo';
			$this->load->view('charisma/grocerycrud', $output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;
                
                $this->load->view('charisma/grocerycrud', (object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
//		$this->_example_output((object)array(
//				'js_files' => $js_files,
//				'css_files' => $css_files,
//				'output'	=> $output
//		));
	}

	public function offices_management2()
	{       
                $crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->load->view('charisma/grocerycrud', $output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->load->view('charisma/grocerycrud', $output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->load->view('charisma/grocerycrud', $output);
		} else {
			return $output;
		}
	}

}
