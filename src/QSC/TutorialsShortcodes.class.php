<?php

namespace QSC;

class TutorialsShortcodes{
	
	public function doRegisterShortcode(){
		add_shortcode('AWS-tut-menu', array($this,'doRenderAndReturnShortcodeAWS'));
		add_shortcode('WPcodeception-tut-menu', array($this,'doRenderAndReturnShortcodeWPcodeception'));
		
	}
	
	public function doRenderAndReturnShortcodeAWS(){
		return '
		<li><a href = "/?p=13390">Back to the Beginning</a></li>
		<li><a href="/aws-instance/">Setup an Ubuntu instance, i.e. on AWS</a>. You should be able to do this on any cloud based <a href="https://www.ubuntu.com/" rel="noopener" target="_blank">Ubuntu</a> machine or laptop.</li>
		<li><a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-key-pairs.html#having-ec2-create-your-key-pair" target = "_blank" >Create a local key pair on your machine and connect to your instance</a>. This is the Amazon security authentication system.</li>
		<li><a href="/?p=13410">Install and update software</a></li>';
		
	}
	
	public function doRenderAndReturnShortcodeWPcodeception(){
		return '
<style>
.toc{border-style: solid; padding: 5px;}
.toc a{text-decoration:underline;}
</style>
<div class = "toc">
<strong>TABLE OF CONTENTS:</strong><ol>
	<li><a href="/?p=15038">Basic WordPress TDD / BDD with Codeception</a></li>
	<li><a href="/?p=15106">Your first WordPress Codeception "cept" acceptance test</a></li>
	<li><a href="/?p=14768">Your first WordPress Codeception "cest" unit test</a></li>
	<li><a href = "/?p=15225">Understanding WordPress Codeception configuration files</a></li>
</ol>
</div>';
	}
	
}
