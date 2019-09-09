<?php

class MyCustomBasicTable extends WPGMZA\MarkerListing\BasicTable
{
	
	public function __construct($map_id)
	{
		WPGMZA\MarkerListing\BasicTable::__construct($map_id);
	}
	
	protected function getItemHTMLPath()
	{
		return plugin_dir_path(__FILE__) . 'html/';
	}
	
}

add_filter('wpgmza_create_WPGMZA\\MarkerListing\\BasicTable', function($map_id) {
	
	return new MyCustomBasicTable($map_id);
	
});
