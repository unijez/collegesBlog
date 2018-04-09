<?php
acf_add_local_field_group(array(
	'key' => 'group_5acb27024be2b',
	'title' => 'Front Page Cateogries',
	'fields' => array(
		array(
			'key' => 'field_5acb2718a6676',
			'label' => 'Front Page Categories',
			'name' => 'front_page_categories',
			'type' => 'taxonomy',
			'instructions' => 'Select four front page categories, if more than four are selected it will only use the first four selections',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'checkbox',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'id',
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'categorized_front_page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
