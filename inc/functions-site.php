<?php
/* Details Section
*******************************/
function details_list ( $post_id, $taxonomy_name ) {
	$cats = wp_get_object_terms($post_id, $taxonomy_name);
	if ( !empty ( $cats ) ) {
		$list = '<ul>';
		foreach ( $cats as $cat ) {
			$list .= '<li>' . $cat->name . '</li>';
		}	
		$list .= '</ul>';
		return $list;
	} else {
		$list = 'stop';
		return $list;
	}
}

/* Google Ad For the Homepage
*******************************/
$ad_homepage = '
<div class="ad-homepage">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- rehabs_homepage -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:600px"
     data-ad-client="ca-pub-7445595777186624"
     data-ad-slot="1706240401"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>';

/* Google Ad For the Sidebar
*******************************/
$ad_sidebar = '
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- rehabs_sidebar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-7445595777186624"
     data-ad-slot="2580224406"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
?>