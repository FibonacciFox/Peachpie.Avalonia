<?php
namespace Avalonia\Remote\Protocol\Viewport;
/**
 */
class ClientViewportAllocatedMessage extends \System\Object
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DpiX;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $DpiY;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DpiX(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DpiX($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DpiY(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_DpiY($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
