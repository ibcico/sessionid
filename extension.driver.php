<?php
	
	class Extension_sessionid extends Extension {
		
		public static $params = array();
		
		public function about() {
			return array(
				'name'			=> 'Session ID Param',
				'version'		=> '1.0.0',
				'release-date'	=> '2011-05-31',
				'author'		=> array(
					'name'			=> 'IBCICO Development',
					'website'		=> 'http://www.ibcico.com'
				),
				'description'	=> 'Adds session ID to parameter pool.'
	 		);
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/frontend/',
					'delegate'	=> 'FrontendParamsResolve',
					'callback'	=> 'addParam'
				)
			);
		}
		
		public function addParam(&$context) {
			$context['params']['session_id'] = session_id();
		}
	}
?>