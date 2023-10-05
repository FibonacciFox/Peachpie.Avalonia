<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TrayIconImplMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class TrayIconImpl extends \System\Object implements 
	\Avalonia\Platform\ITrayIconImpl,
	\System\IDisposable
{
	/**
	 * @var \System\Action
	 * @property
	 */
	public $OnClicked;
	/**
	 * @var \Avalonia\Controls\Platform\INativeMenuExporter
	 * @property
	 */
	public readonly $MenuExporter;
	/**
	 * @return \System\Action
	 */
	public  function get_OnClicked(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_OnClicked($value){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeMenuExporter
	 */
	public  function get_MenuExporter(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @return \System\Void|void
	 */
	protected static function ProcWnd($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @param \System\Boolean $visible
	 * @return \System\Void|void
	 */
	public  function SetIsVisible($visible){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	public  function SetToolTipText($text){}
	/**
	 * @param \System\Boolean $remove
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateIcon($remove){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRightClicked(){}
	/**
	 * @uses TrayIconImplMethodsOverride::Dispose_1 ($disposing)
	 * @uses TrayIconImplMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
