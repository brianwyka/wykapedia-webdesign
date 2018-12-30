<?php

	class Application {
		
		public static function start() {
			$_CONFIG = new Config();
			$_CONFIG->setIsDevEnv(FALSE);
			$_CONFIG->setSiteRoot('webdesign');
			$_CONFIG->setSiteTitle('wykaPedia Web Design &amp; Development');
			$metaKeywords = array(
				'Brian Wyka', 'wykaPedia', 'wykaPedia web design', 
				'wykaPedia web design and development', 'Shelton CT Webdesign',
				'Shelton CT Web development', 'Shelton CT Brian Wyka web',
				'Brian Wyka Shelton CT'
			);
			$_CONFIG->setMetaKeywords($metaKeywords);
			$metaDescription = 'My name is Brian Wyka, and I am the founder of wykaPedia '
							 . 'Web Design.  wykaPedia was originally just my homepage on '
							 . 'the internet, but after I started creating more web pages '
							 . 'for myself and for friends, I decided to step up and make '
							 . 'wykaPedia Web Design.';
			$_CONFIG->setMetaDescription($metaDescription);
			$_CONFIG->setMySqlHost('mysql1001.mochahost.com');
			$_CONFIG->setMySqlDb('wykaman_wykapedia');
			$_CONFIG->setMySqlUser('wykaman_wyka');
			$_CONFIG->setMySqlPass('FA*O&nfo9n&SA(');
			Session::load('config', $_CONFIG);
		}
		
		public static function stop() {
			MySQL::disconnect();
		}
		
	}

?>