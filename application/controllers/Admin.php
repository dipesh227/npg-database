<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Admindb');
	}
	public function index()
	{
		$this->load->view('back_end/index');
	}
	public function login()
	{
		$this->load->view('back_end/login');
	}

	public function check_login_data()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User_Name', 'required', array('required' => 'User Name is required'));
		$this->form_validation->set_rules('cpassword', 'Password', 'required|alpha_numeric', array('required' => 'Password is required'));
		if ($this->form_validation->run()) {
			$data = array(
				'user_name' => $user_name = $this->input->post('user_name'),
				'password' => $this->input->post('cpassword'),
			);
			if ($this->Admindb->login($data)) {

				$array = array(
					'success' => true,
				);
			} else {

				$array = array(
					'success' => false,
				);
			}
		} else {
			$array = array(
				'user_name_error' => form_error('user_name'),
				'password_error' => form_error('cpassword'),
			);
		}
		echo json_encode($array);
	}
	public function logout()
	{
		$this->session->unset_userdata('isslogin', 'username', 'type');
		redirect('admin/login');
	}
	public function complains()
	{
		$this->load->view('back_end/complains');
	}
	public function tender()
	{
		$this->load->view('back_end/tender');
	}
	public function slider()
	{
		$this->load->view('back_end/slider');
	}
	public function category()
	{
		$this->load->view('back_end/category');
	}
	public function newpost()
	{
		$this->load->view('back_end/newpost');
	}
	public function editpost()
	{
		$this->load->view('back_end/editpost');
	}
	public function gallery()
	{
		$this->load->view('back_end/gallery');
	}
	public function adduser()
	{
		$this->load->view('back_end/adduser');
	}
	public function slideriminsert()
	{
		if ($this->input->is_ajax_request()) {
			$name = $_FILES['sliderpic1']['name'];
			$sliderpic = base64_encode(file_get_contents($_FILES['sliderpic1']['tmp_name']));
			$data = array('sliderpic' => $sliderpic, 'name' => $name);
			if ($this->Admindb->sliderimginsert($data)) {
				$data = array(
					'responce' => 'success',
					'message' => 'Record added Successfully'
				);
			} else {
				$data = array(
					'responce' => 'error',
					'message' => 'Failed to add record'
				);
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function tenderiminsert()
	{
		
		if ($this->input->is_ajax_request()) {
			$name = $_FILES['tenderpic1']['name'];
			$tenderpic = base64_encode(file_get_contents($_FILES['tenderpic1']['tmp_name']));
			$data = array('file' => $tenderpic, 'tender_name' => $name, 'date'=> date("l, j-F-Y"));
			if ($this->Admindb->tenderimginsert($data)) {
				$data = array(
					'responce' => 'success',
					'message' => 'Record added Successfully'
				);
			} else {
				$data = array(
					'responce' => 'error',
					'message' => 'Failed to add record'
				);
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function tenderfetch()
	{
		// if ($this->input->is_ajax_request()) {
		// if ($posts = $this->Admindb->get_entries()) {
		// 	$data = array('responce' => 'success', 'posts' => $posts);
		// }else{
		// 	$data = array('responce' => 'error', 'message' => 'Failed to fetch data');
		// }
		$posts = $this->Admindb->get_tender();
		$data = array('responce' => 'success', 'posts' => $posts);
		echo json_encode($data);
		// } else {
		// 	echo "No direct script access allowed";
		// }
	}
	public function fetchme()
	{
		// if ($this->input->is_ajax_request()) {
		// if ($posts = $this->Admindb->get_entries()) {
		// 	$data = array('responce' => 'success', 'posts' => $posts);
		// }else{
		// 	$data = array('responce' => 'error', 'message' => 'Failed to fetch data');
		// }
		$posts = $this->Admindb->get_entries();
		$data = array('responce' => 'success', 'posts' => $posts);
		echo json_encode($data);
		// } else {
		// 	echo "No direct script access allowed";
		// }
	}
	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Admindb->edit_entry($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'failed to fetch record');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_name', 'Name', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id'] = $this->input->post('edit_record_id');
				$data['name'] = $this->input->post('edit_name');
				if ($this->Admindb->update_entry($data)) {
					$data = array('responce' => 'success', 'message' => 'Record update Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to update record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');

			if ($this->Admindb->delete_entry($del_id)) {
				$data = array('responce' => 'success');
			} else {
				$data = array('responce' => 'error');
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function galleryimginsert()
	{
		if ($this->input->is_ajax_request()) {
			$name = $_FILES['gallerypic']['name'];
			$sliderpic = base64_encode(file_get_contents($_FILES['gallerypic']['tmp_name']));
			$data = array('pic' => $sliderpic, 'name' => $name);
			if ($this->Admindb->galleryimginserts($data)) {
				$data = array(
					'responce' => 'success',
					'message' => 'Record added Successfully'
				);
			} else {
				$data = array(
					'responce' => 'error',
					'message' => 'Failed to add record'
				);
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function fetchgalleryimg()
	{
		if ($this->input->is_ajax_request()) {
			if ($posts = $this->Admindb->get_entriesgalleryimg()) {
				$data = array('responce' => 'success', 'posts' => $posts);
			} else {
				$data = array('responce' => 'error', 'message' => 'Failed to fetch data');
			}
			// $posts = $this->Admindb->get_entriesgalleryimg();
			// $data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
}
