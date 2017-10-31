<?php

namespace QSC;

class TutorialsShortcodes{
	
	public function doRegisterShortcode(){
		add_shortcode('AWS-tut-menu', array($this,'doRenderAndReturnShortcodeAWS'));
		add_shortcode('WPcodeception-tut-menu', array($this,'doRenderAndReturnShortcodeWPcodeception'));
		
	}
	
	public function doRenderAndReturnShortcodeAWS(){
		return "Hello World!";
	}
	
	public function doRenderAndReturnShortcodeWPcodeception(){
		return '<h2><ul>
	<li><a href="/?p=15038">WordPress Codeception Tutorial</a></li>
	<li><a href="/?p=14768">Your first unit test</a></li>
	<li><a href="/?p=15106">Your first acceptance test</a></li>
</ul></h2>';
	}
	
}