<?php

namespace QSC;

class Shortcode_ContactForm{
	
	public function doRegisterShortcode(){
		add_shortcode('QSC-ContactForm', array($this,'doRenderAndReturnShortcode'));
	}
	
	public function doRenderAndReturnShortcode(){
		return "Hello World!";
	}
	
}