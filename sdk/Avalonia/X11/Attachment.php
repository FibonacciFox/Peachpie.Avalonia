<?php
namespace Avalonia\X11;
/**
 */
class Attachment extends \System\Object implements 
	\Avalonia\Controls\Platform\INativeControlHostControlTopLevelAttachment,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Controls\Platform\INativeControlHostImpl
	 * @property
	 */
	public $AttachedTo;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckDisposed(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
