<?php
class OutputHelper
{
	private static $output 	= array();
	private static $id;
	
	public static function grab($id)
	{
		ob_start();
		self::$id = $id;
	}
	
	public static function stop()
	{
		self::$output[self::$id][] = ob_get_contents();
		ob_end_clean();
	}
	
	public static function get($id)
	{
		$contents = isset(self::$output[$id]) ? self::$output[$id] : array();
		return implode('', $contents);
	}
	
	public static function partialItem($view, $data)
	{
		$ci =& get_instance();
		$ci->load->view($view, $data);
	}
	
	public static function partialItems($view, $data)
	{
		$keys = array_keys($data);
		$singular = 'item';
		if (isset($keys[0])) {
			$singular = singular($keys[0]);
			foreach ($data[$keys[0]] as $item)
				OutputHelper::partialItem($view, array($singular => $item));
		}
	}
	
	public static function sliceArray($array = array(), $itemsPerSlice = 5)
	{
		$_array = array_chunk($array, $itemsPerSlice);
		print_flex($_array);
	}
}