<?php


namespace Homi\Traits;

Trait AdminPages {

	protected $pages;

	public function setAdminPages(){

	    $icon = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 299 310" style="enable-background:new 0 0 299 310;" xml:space="preserve"><g><polygon style="fill:#9ea3a8;" points="13.6,107 13.6,266 57.3,266 57.3,129.8 144.7,68.8 239,130.6 239,266 282.7,266 282.7,107 143.9,16.1 "/><polygon style="fill:#9ea3a8;" points="179.6,266 179.6,148.9 109.7,148.9 109.7,266 52.6,303 123.9,303 "/><polygon style="fill:#9ea3a8;" points="435.7,168.8 371.5,168.8 371.5,113.7 346.8,113.7 346.8,244.5 371.5,244.5 371.5,191.6 435.7,191.6 435.7,244.5 460.2,244.5 460.2,113.7 435.7,113.7 "/><path style="fill:#9ea3a8;" d="M556,110.9c-45.2,0-67.2,34.6-67.2,68.9c0,34.4,21.3,67.4,67.2,67.4c45.9,0,66.7-33.8,67.1-67.6C623.4,145.5,601,110.9,556,110.9z M556,224.7c-30.8,0-42.4-23-43-44.5c-0.6-22,12.1-46.9,43-46.9c30.8,0,43.1,24.7,42.8,46.7C598.4,201.5,586.8,224.7,556,224.7z"/><polygon style="fill:#9ea3a8;" points="721.9,170 681,113.7 652.6,113.7 652.6,244.5 677.2,244.5 677.2,149.4 718.9,206.4 723.7,206.4 766.3,149.6 766.3,244.5 791,244.5 791,113.7 762.8,113.7 "/><rect x="825.6" y="113.5" style="fill:#9ea3a8;" width="24.5" height="130.7"/></g></svg>';

		$this->pages = array(
			'homi' => array(
				'page_title'    => 'Homi',
				'menu_title'    => 'Homi',
				'capability'    => 'manage_options',
				'icon_url'      => 'data:image/svg+xml;base64,' . base64_encode( $icon ),
				'position'      => 10,
				'subpages'      => array(
//					'homi-sub' => array(
//						'page_title'    => 'Homi SubPage',
//						'menu_title'    => 'Homi SubPage',
//						'capability'    => 'manage_options',
//					)
				)
			),
		);

	}


	public function getAdminPages(){

		return $this->pages;

	}

}
