<?php
namespace Avalonia\Platform;
/**
 */
class Screen extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_PixelDensity(){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	public  function get_Bounds(){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	public  function get_WorkingArea(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrimary(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Primary(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
