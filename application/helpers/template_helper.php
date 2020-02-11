<?php

function getTemplate($view, $title, $css = '', $scripts = '')
{
	$CI = get_instance();

	$template = array(
		'title' => $title,
		'content' => $view,
		'header' => $CI->load->view('layouts/links', $css, true),
		'scripts' => $CI->load->view('layouts/scripts', $scripts, true),
		'footer' => $CI->load->view('layouts/footer', '', true),
		'aside' => $CI->load->view('layouts/aside', '', true),
		'topnav' => $CI->load->view('layouts/top-nav', '', true)
	);

	return $template;
}
