<?php
namespace Avalonia\X11;
/**
 */
class X11Info extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Display;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $DeferredDisplay;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $DefaultScreen;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $BlackPixel;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RootWindow;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $DefaultRootWindow;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $DefaultCursor;
	/**
	 * @var \Avalonia\X11\X11Atoms
	 * @property
	 */
	public readonly $Atoms;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Xim;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RandrEventBase;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RandrErrorBase;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $RandrVersion;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $XInputOpcode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $XInputEventBase;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $XInputErrorBase;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $XInputVersion;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $LastActivityTimestamp;
	/**
	 * @var \System\Nullable_1[Avalonia\X11\XVisualInfo]
	 * @property
	 */
	public $TransparentVisualInfo;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasXim;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasXSync;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public $DefaultFontSet;
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
