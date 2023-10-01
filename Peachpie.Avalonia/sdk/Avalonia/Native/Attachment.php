<?php
namespace Avalonia\Native;
/**
 */
class Attachment extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function GetParentHandle(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeControlHostImpl
	 */
	public  function get_AttachedTo(){}
	/**
	 * @param \Avalonia\Controls\Platform\INativeControlHostImpl $value
	 * @return \System\Void|void
	 */
	public  function set_AttachedTo($value){}
	/**
	 * @param \Avalonia\Controls\Platform\INativeControlHostImpl $host
	 * @return \System\Boolean
	 */
	public  function IsCompatibleWith($host){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \System\Void|void
	 */
	public  function HideWithSize($size){}
	/**
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	public  function ShowInBounds($bounds){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \System\Void|void
	 */
	public  function InitWithChild($handle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
