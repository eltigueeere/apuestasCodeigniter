<?php
if ( ! function_exists('muestra_mensaje_flash'))
{
	function muestra_mensaje_flash($mensaje = '')
	{
		if (is_array($mensaje))
		{
			$html = '<div class="alert alert-'.$mensaje['tipo'].' alert-dismissible">';
			$html.= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			$html.= $mensaje['texto'];
			$html.= '</div>';
			return $html;
		}
		else 
			return FALSE;
	}
}