<?php
class ControllerCommonCustomColumnLeft extends Controller {
	public function index() {
		if (isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->load->language('common/column_left');
			// Create a 3 level menu array
			// Level 2 can not have children
			
			// Menu
			$data['menus'][] = array(
				'id'       => 'menu-dashboard',
				'icon'	   => 'fa-dashboard',
				'name'	   => 'Tổng quan',
				'href'     => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()
			);
			
			// Catalog
			$catalog = array();
			
			// if ($this->user->hasPermission('access', 'catalog/category')) {
			// 	$catalog[] = array(
			// 		'name'	   => 'Danh mục',
			// 		'href'     => $this->url->link('catalog/category', 'user_token=' . $this->session->data['user_token'], true),
			// 		'children' => array()		
			// 	);
			// }
			
			if ($this->user->hasPermission('access', 'catalog/product')) {
				$catalog[] = array(
					'name'	   => 'Sản phẩm',
					'href'     => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'], true),
					'children' => array()		
				);
			}
			if ($catalog) {
				$data['menus'][] = array(
					'id'       => 'menu-catalog',
					'icon'	   => 'fa-tags', 
					'name'	   => 'Sản phẩm',
					'href'     => $this->url->link('catalog/product', 'user_token=' . $this->session->data['user_token'], true),
					'children' => $catalog
				);		
			}
			return $this->load->view('common/custom_column_left', $data);
		}
	}
}