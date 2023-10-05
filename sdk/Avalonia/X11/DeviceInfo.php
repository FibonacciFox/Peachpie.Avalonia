<?php
namespace Avalonia\X11;
/**
 */
class DeviceInfo extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \Avalonia\X11\XIValuatorClassInfo[]
	 * @property
	 */
	public $Valuators;
	/**
	 * @var \Avalonia\X11\XIScrollClassInfo[]
	 * @property
	 */
	public $Scrollers;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \Avalonia\X11\XIValuatorClassInfo[]
	 */
	public  function get_Valuators(){}
	/**
	 * @param \Avalonia\X11\XIValuatorClassInfo[] $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Valuators($value){}
	/**
	 * @return \Avalonia\X11\XIScrollClassInfo[]
	 */
	public  function get_Scrollers(){}
	/**
	 * @param \Avalonia\X11\XIScrollClassInfo[] $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Scrollers($value){}
	/**
	 * @param \Avalonia\X11\XIAnyClassInfo** $classes
	 * @param \System\Int32|int $num
	 * @return \System\Void|void
	 */
	public  function Update($classes, $num){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2 $valuators
	 * @return \System\Void|void
	 */
	public  function UpdateValuators($valuators){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
