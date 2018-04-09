<?php

acf_add_local_field_group(array(
	'key' => 'group_5aa64bcbb8f56',
	'title' => 'Display Posts',
	'fields' => array(
		array(
			'key' => 'field_5aa64be1979fd',
			'label' => 'Category',
			'name' => 'category',
			'type' => 'taxonomy',
			'instructions' => 'Select one of the categories and then it will automatically pull your posts into the page',
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
				'value' => 'posts_page.php',
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
