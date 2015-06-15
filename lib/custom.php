<?php
define('ICL_DONT_LOAD_NAVIGATION_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', TRUE);
define('ICL_DONT_LOAD_LANGUAGES_JS', TRUE);


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function jmt_highlight( $atts, $content = null ) {
	return '<div class="highlight">' . do_shortcode($content) . '</div>';
}
add_shortcode('highlight', 'jmt_highlight');
function jmt_negative_highlight( $atts, $content = null ) {
		return '<div class="highlight highlight--negative">' . do_shortcode($content) . '</div>';
	}
add_shortcode('highlight-negative', 'jmt_negative_highlight');
function short_one_half( $atts, $content = null ) {
		return '<div class="onehalf">' . do_shortcode($content) . '</div>';
	}
add_shortcode('one_half', 'short_one_half');

function short_one_half_last( $atts, $content = null ) {
		return '<div class="onehalf last">' . do_shortcode($content) . '</div>';
	}
add_shortcode('one_half_last', 'short_one_half_last');
function short_floatleft( $atts, $content = null ) {
		return '<div class="floatleft">' . do_shortcode($content) . '</div>';
	}
add_shortcode('floatleft', 'short_floatleft');
function short_floatright( $atts, $content = null ) {
		return '<div class="floatright">' . do_shortcode($content) . '</div>';
	}
add_shortcode('floatright', 'short_floatright');

function short_callmenow( $atts, $content = null ) {
		return '<div class="callmenow highlight"><a href="?p=4">'.__('More details','miskolczilaw'). do_shortcode($content). ' <em><i class="icon-phone"></i> +36 1 218 4148</em></a></div>';
	}
 add_shortcode('callmenow', 'short_callmenow');


function jmt_clean_shortcodes($content){   
	$array = array (
	    '<p>[' => '[', 
	    ']</p>' => ']', 
	    ']<br />' => ']'
	);
	$content = strtr($content, $array);
	return $content;
}
add_filter('the_content', 'jmt_clean_shortcodes');



function jmt_add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    register_taxonomy_for_object_type( 'category', 'page' );
} 

add_action( 'init', 'jmt_add_taxonomies_to_pages' );


if ( ! is_admin() ) {
add_action( 'pre_get_posts', 'jmt_category_and_tag_archives' );
  
 }

// Add Page as a post_type in the archive.php and tag.php 

function jmt_category_and_tag_archives( $wp_query ) {

$my_post_array = array('post','page');

if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
    $wp_query->set( 'post_type', $my_post_array );

  if ( $wp_query->get( 'tag' ) )
    $wp_query->set( 'post_type', $my_post_array );

}



/************ MetaBoxes **********/
if ( file_exists(  __DIR__ .'/CMB2/init.php' ) ) { require_once  __DIR__ .'/CMB2/init.php';};
/************ MetaBoxes **********/

add_filter( 'cmb2_meta_boxes', 'jmt_metaboxes' );
function jmt_metaboxes( array $meta_boxes ) {
	/**
	 * Apartment Metaboxes
	*/
  $prefix = '_meta_';

  $meta_boxes['member'] = array(
    'id'         => 'membersmeta',
    'title'      => 'Munkatársak adatai',
    'object_types'  => array( 'page'), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'template-members.php' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    'fields'     => array (
			array (
				'id' => 'members',
				'type' => 'group',
				'description' => 'Repeatable Sections',
				'options'     => array (
					'group_title'   => 'Member {#}', 
					'add_button'    => 'New Member',
					'remove_button' => 'Remove Member',
					'sortable'      => true, // beta
				),
				'fields'     => array(
					array (
						'name' => 'Név',
						'id'   => 'name',
						'type' => 'text_medium',
					),
					array (
						'name' => 'Titulus',
						'id'   => 'title',
						'type' => 'text_medium',
					),
					array (
						'name' => 'Fotó',
						'id'   => 'photo',
						'type' => 'file',
					),
					array (
						'name' => 'Bemutatkozás',
						'id'   => 'descr',
						'type' => 'wysiwyg',
							'options' => array(
							'media_buttons' => false,
							'textarea_rows' =>  5,
							'teeny' => true,
						),
					),
	    	) // end of fields
			)
    ) 
  );

	$meta_boxes['pages'] = array(
		'id'         => 'pagemeta',
		'title'      => 'Additional Page Elements',
		'object_types'  => array( 'page'),
		'context'    => 'side',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array (
				'name' => 'Preface',
				'id'   => 'preface',
				'type' => 'textarea_small',
			),
		)
	);


  return $meta_boxes;
}