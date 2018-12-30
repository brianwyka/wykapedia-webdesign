<?php

	class Application {
		
		public static function start($_CONFIG) {
			$_CONFIG->setIsDevEnv(FALSE);
			$_CONFIG->setSiteRoot('webdesign/versions/v1');
			$_CONFIG->setSiteTitle('wykaPedia Web Design &amp; Development v1');
			$metaKeywords = array(
				'Brian Wyka', 'wykaPedia', 'wykaPedia web design', 
				'wykaPedia web design and development'
			);
			$_CONFIG->setMetaKeywords($metaKeywords);
			$metaDescription = 'My name is Brian Wyka, and I am the founder of wykaPedia '
							 . 'Web Design.  wykaPedia was originally just my homepage on '
							 . 'the internet, but after I started creating more web pages '
							 . 'for myself and for friends, I decided to step up and make '
							 . 'wykaPedia Web Design.';
			$_CONFIG->setMetaDescription($metaDescription);
			$_CONFIG->setMySqlDb('wykaped1_wykapedia');
			$_CONFIG->setMySqlUser('wykaped1_wyka');
			$_CONFIG->setMySqlPass('wykab1Nomandro3#');
		}
		
		public static function stop() {
			MySQL::disconnect();
		}
		
	}

?>