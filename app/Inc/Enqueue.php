<?php

namespace App\Inc;

class Enqueue
{
    public function boot()
    {
        \App\Core\Enqueue::setMainStyle();
        // css include
        \App\Core\Enqueue::setStyle('bootstrap', 'assets/css/bootstrap.css');
		\App\Core\Enqueue::setStyle('reset-css', 'assets/css/reset.css');
		\App\Core\Enqueue::setStyle('fontawesome-css', 'assets/css/fontawesome.min.css');
		\App\Core\Enqueue::setStyle('slick-css', 'assets/css/slick.css');
		\App\Core\Enqueue::setStyle('slick-theme-css', 'assets/css/slick-theme.css');
		\App\Core\Enqueue::setStyle('strip-css', 'assets/css/strip.css');
		\App\Core\Enqueue::setStyle('custom-css', 'assets/css/custom.css');
		// \App\Core\Enqueue::setStyle('main-css', 'assets/css/main.css');
		\App\Core\Enqueue::setStyle('main-calendar-css', 'assets/css/main.css');
		
		



        // js Include
		\App\Core\Enqueue::setScript('jquery-js', 'assets/js/jquery.js');
        \App\Core\Enqueue::setScript('strip-js', 'assets/js/strip.pkgd.js');
		\App\Core\Enqueue::setScript('slick-js', 'assets/js/slick.min.js');
		\App\Core\Enqueue::setScript('custom-js', 'assets/js/custom.js');
		\App\Core\Enqueue::setScript('main-calendar-js', 'assets/js/main.js');
		
		
		
		
		
    }
}
