<?php
$post_id;
$post_id = $post->ID;
$values = get_post_meta( $post_id );
$post_type = get_post_type();
/*
if ( 'rvparks' == $post_type ) {
	$field_value = 'park';
	$post_type_name = 'RV Park';
	$listing_slug = 'rv-parks';
	$listing_slug_name = 'RV Parks';
}
if ( 'rvdumps' == $post_type ) {
	$field_value = 'dump';
	$post_type_name = 'RV Dump';
	$listing_slug = 'rv-dumps';
	$listing_slug_name = 'RV Dumps';
}
if ( 'rvboons' == $post_type ) {
	$field_value = 'boon';
	$post_type_name = 'RV Boondock';
	$listing_slug = 'rv-boondocks';
	$listing_slug_name = 'RV Boondocks';
}
$status = $values['park_status'][0];
*/

/* Basic Info Section
*******************************/
$name = get_the_title();
/*
$boon_types = wp_get_object_terms( $post_id, 'boons' );
$boon_type = $boon_types[0]->slug;
$boon_type_name = $boon_types[0]->name;
*/
$address = $values['prc_address'][0];
$email = $values['prc_email'][0];					
$web = $values['prc_website'][0];
$license = $values['prc_license'][0];
$years = $values['prc_years'][0];
$staff = $values['prc_staff'][0];
$occupancy = $values['prc_occupancy'][0];
$contact_person = $values['prc_contact_person'][0];
$contact_number = $values['prc_contact_number'][0];
$lat = $values['prc_lat'][0];
$lng = $values['prc_lng'][0];


$basic_info .= '
<h1 itemprop="name">' . $name . '</h1>
<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<p>
		<span itemprop="streetAddress">' . $address . '</span><br />';		
	$basic_info .= '	
	</p>
</address>';
$basic_info .= '<p>';
if ( $email != '') {
	$basic_info .= '<a href="mailto:' . $email . 'subject=Inquiry%20via%20PrescottRecoveryCenters.com">Email this Treatment Center</a><br />';
}
if ( $web != '') {
	$basic_info .= '<a href="' . $web . '" target="_blank">' . $web . '</a><br />';
}
if ( $license != '') {
	$basic_info .= 'License: ' . $license . '<br />';
}
if ( $years != '') {
	$basic_info .= 'Years in Practice: ' . $years . '<br />';
}
if ( $staff != '') {
	$basic_info .= 'Average Number of Staff: ' . $staff . '<br />';
}
if ( $occupancy != '') {
	$basic_info .= 'Maximum Occupancy: ' . $occupancy . '<br />';
}
if ( $contact_person != '') {
	$basic_info .= 'Contact Person: ' . $contact_person . '<br />';
}
if ( $contact_number != '') {
	$basic_info .= 'Contact Number: ' . $contact_number . '<br />';
}
$basic_info .= '</p>';

$marker_html = '<p>' . esc_attr(  $name ) . '<br />' . esc_attr( $address ) . '<br />' . esc_attr( $city ) . ', ' . $state_abr . '<br />Driving directions: <br /><a href="http://maps.google.com/maps?daddr=' . $lat . ',' . $lng . '" target="_blank">To here</a>|<a href="http://maps.google.com/maps?saddr=' . $lat . ',' . $lng . '" target="_blank">From here</a></p>';
$markers[] = "var point = new google.maps.LatLng($lat,$lng); var marker = createMarker(point,'$marker_html')";

if ( 'rvparks' == $post_type ) {				
	/* Ratings Section
	*******************************/
	$ratings = unserialize($values['park_vote_fields'][0]);
	$vote_tally = $ratings[0];
	$vote_avg = $ratings[1];
	$ratings_section = '
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
	 <span class="ratings_name">' . $name . '</span><br />
		<div id="ratings">' .
			get_star_rating($vote_avg, 'large') . '
		</div>
		<br />
		<span class="rating">
		<meta itemprop="ratingValue" content="' . $vote_avg . '">' . $vote_avg . ' out of 5
		</span>
		based on
	 <span itemprop="reviewCount">' . $vote_tally . '</span> ratings.
	</div>
	<div class="review_button" >
		<a href="#review_box"> Read Reviews for this RV Park</a>
	</div>
	<div id="facebook_badge">
	</div>';
}

/* Google Ad
*******************************/
$google_advert = '
<div class="ad_area_aside">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- prescottrecoverycenters.com -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-7445595777186624"
     data-ad-slot="5761399207"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>';

$residential_options = details_list ( $post_id, 'residential_options' );
$treatment_services = details_list ( $post_id, 'treatment_services' );
$treatment_methods = details_list ( $post_id, 'treatment_methods' );	
$client_types = details_list ( $post_id, 'client_types' );	
	
if ( $residential_options != 'stop' || $treatment_services != 'stop' || $treatment_methods != 'stop' || $client_types != 'stop' ) { 
	$treatment_details_proceed = 'go';
}
$treatment_details_header = '<h2>Treatment Information</h2>';
$residential_options_list = '<h3>Residential Options</h3>' . $residential_options;
$treatment_services_list = '<h3>Treatment Services</h3>' . $treatment_services;
$treatment_methods_list = '<h3>Treatment Methods</h3>' . $treatment_methods;
$client_types_list = '<h3>Types of Clients Accepted</h3>' . $client_types;
$treatment_no_details = '<p>This recovery center has not provided any treatment details.</p>';

//Payment Details
$payment_forms = details_list( $post_id, 'payment_forms' );
$insurance_plans = details_list ( $post_id, 'insurance_plans' );

// Setup Site variables to pass
if ( $payment_forms != 'stop' || $insurance_plans != 'stop' ) { 
	$payment_details_proceed = 'go';
}
$payment_details_header = '<h2>Payment Information</h2>';
$payment_forms_list .= '<h3>Forms of Payment Accepted</h3>' . 		$payment_forms;
$insurance_plans_list .= '<h3>Insurance Plans Accepted</h3>' . 		$insurance_plans;
$payment_no_details = '<p>This recovery center has not provided any payment details.</p>';
?>