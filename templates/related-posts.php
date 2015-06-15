<?php 

$the_relateds = yarpp_related(
	array(
		// Pool options: these determine the "pool" of entities which are considered
		'post_type' => array('post' ),
		'show_pass_post' => false, // show password-protected posts
		'past_only' => false, // show only posts which were published before the reference post
		'exclude' => array(), // a list of term_taxonomy_ids. entities with any of these terms will be excluded from consideration.
		'recent' => false, // to limit to entries published recently, set to something like '15 day', '20 week', or '12 month'.
		// Relatedness options: these determine how "relatedness" is computed
		// Weights are used to construct the "match score" between candidates and the reference post
		'weight' => array(
			'body' => 2,
			'title' => 2, // larger weights mean this criteria will be weighted more heavily
			'tax' => array(
				'category' => 1,
			)
		),
		'require_tax' => array(
			'category' => 1
		),  
		'threshold' => 3,
		'template' => 'yarpp-template-irasok.php',
		'limit' => 8, // maximum number of results
		'order' => 'score DESC'
	),
	$post->ID, 
	true // (optional) true to echo the HTML block; false to return it
); 
?>
