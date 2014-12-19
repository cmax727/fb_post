<?php
/**
 * css and js loader
 * features: obfuscation of css and js, expire headers
 *
 */
class Cssjsloader
{
	protected $_js 				= array();
	protected $_css				= array();
	protected $_cache			= FALSE;
	protected $_config			= array();
	
	protected $_jsAdditional 	= array();
	
	protected $_ci				= false;
	
	protected $_obfuscate		= FALSE;
  
  private $_cssFolder=  'stylesheets';
  private $_jsFolder=  'js';
	
	public function __construct($config = array())
	{
		$this->_config 	= $config;
		$this->_ci 		=& get_instance();
		$this->_expire 	= 60 * 60 * 24 * 14;
	}
	
	public function addStringsTojs($strings)
	{
		$this->_jsAdditional = $strings;
	}
	
	public function cssCount()
	{
		return count($this->_css);
	}
	
	public function jsCount()
	{
		return count($this->_js);
	}
	
	/**
	 * add js in que
	 *
	 * @param string $js
	 * @return Cssjsloader
	 */
	public function link_js($js)
	{
		$this->_js[] = $js;
		return $this;
	}
	
	public function link_css($css)
	{
		$this->_css[] = $css;
		return $this;
	}
	
	public function createCssLink()
	{
		if ($this->getConfig('boundCss')) {
			$fileName 		= md5(implode('', $this->_css));
			
			$destinationCacheFile = 'css/' . $fileName . '.css'; 
			if (!file_exists($destinationCacheFile) || $this->_cache == FALSE) {
				$outString = '';
				foreach ($this->_css as $filepath) {
					$path = $this->_cssFolder . '/' . $filepath . '.css';
					if (file_exists($path))
						$outString .= file_get_contents($path);
				}
				
				file_put_contents($destinationCacheFile, $outString);
			}		
	
			return '<link media="screen, projection" type="text/css" href="' . site_url() . $this->_cssFolder .'/' . $fileName . '.css' . '" rel="stylesheet"/>';
		} else {
			$html = '';
			foreach ($this->_css as $filepath) {
				$html .= '<link media="screen, projection" type="text/css" href="' . site_url() . $this->_cssFolder . '/' . $filepath . '.css" rel="stylesheet"/>'; 
			}
			
			return $html;
		}
	}
	
	/**
	 * returns link for all js files
	 *
	 * @return unknown
	 */
	public function createJsLink()
	{
		if ($this->getConfig('boundJs')) {
			$fileName 		= md5(implode('', $this->_js));
			
			$destinationCacheFile = 'js/' . $fileName . '.js'; 
			if (!file_exists($destinationCacheFile) || $this->_cache == FALSE) {
				$outString = '';
				foreach ($this->_js as $filepath) {
					$path = $this->_jsFolder . '/' . $filepath . '.js';
					if (file_exists($path))
						$outString .= file_get_contents($path);
				}
				
				file_put_contents($destinationCacheFile, $outString);
			}		
			return '<script src="' . site_url() . $this->_jsFolder . '/' . $fileName . '.js" type="text/javascript"></script>';
		} else {
			$html = '';
			foreach ($this->_js as $filepath) {
				$html .= '<script src="' . site_url() . $this->_jsFolder . '/' . $filepath . '.js" type="text/javascript"></script>';
			}
			
			return $html;
		}
	}
	
	public function outputJs()
	{
		$outString = '';
		foreach ($this->_js as $js) {
			$file = ROOTPATH . $this->_jsFolder . '/' . $js . '.js';
//			print_flex($file);
//			die();
			if (file_exists($file))
				$outString .= file_get_contents($file);
		}
		
		if ($this->_obfuscate) {
			$outString = JSMin::minify($outString);
		}
		
		return $outString;
	}
	
	public function outputCss()
	{
		$outString = '';
		foreach ($this->_css as $css) {
			$file = ROOTPATH . $this->_cssFolder . '/' . $css . '.css';
			if (file_exists($file))
				$outString .= file_get_contents($file);
		}
		
		if ($this->_obfuscate)
			$outString = preg_replace('/\s+/', ' ', $outString);
		
		return $outString;
	}
	
	public function getConfig($item)
	{
		return isset($this->_config[$item]) ? $this->_config[$item] : FALSE;
	}
}
