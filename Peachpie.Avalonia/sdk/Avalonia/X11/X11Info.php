<?php
namespace Avalonia\X11;
/**
 */
class X11Info extends \System\Object
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Display(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DeferredDisplay(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_DefaultScreen(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_BlackPixel(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_RootWindow(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DefaultRootWindow(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DefaultCursor(){}
	/**
	 * @return \Avalonia\X11\X11Atoms
	 */
	public  function get_Atoms(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Xim(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RandrEventBase(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RandrErrorBase(){}
	/**
	 * @return \System\Version
	 */
	public  function get_RandrVersion(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_XInputOpcode(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_XInputEventBase(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_XInputErrorBase(){}
	/**
	 * @return \System\Version
	 */
	public  function get_XInputVersion(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_LastActivityTimestamp(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_LastActivityTimestamp($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_TransparentVisualInfo(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparentVisualInfo($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasXim(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_HasXim($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasXSync(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_HasXSync($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_DefaultFontSet(){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	public  function set_DefaultFontSet($value){}
	/**
	 * @param \System\Int32|int $type
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function setlocale($type, $s){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
