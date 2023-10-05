<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
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
class __MicroComIAvnWindowProxy extends \Avalonia\Native\Interop\Impl\__MicroComIAvnWindowBaseProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnWindowBase,
	\Avalonia\Native\Interop\IAvnWindow
{
	/**
	 * @var \Avalonia\Native\Interop\AvnWindowState
	 * @property
	 */
	public readonly $WindowState;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ExtendTitleBarHeight;
	/**
	 * @var \Avalonia\Native\Interop\AvnSize
	 * @property
	 */
	public readonly $ClientSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @var \Avalonia\Native\Interop\AvnPoint
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \Avalonia\Native\Interop\IAvnTextInputMethod
	 * @property
	 */
	public readonly $InputMethod;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @param \System\Int32|int $enable
	 * @return \System\Void|void
	 */
	public  function SetEnabled($enable){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function SetCanResize($value){}
	/**
	 * @param \Avalonia\Native\Interop\SystemDecorations $value
	 * @return \System\Void|void
	 */
	public  function SetDecorations($value){}
	/**
	 * @param \System\String|string $utf8Title
	 * @return \System\Void|void
	 */
	public  function SetTitle($utf8Title){}
	/**
	 * @param \Avalonia\Native\Interop\AvnColor $color
	 * @return \System\Void|void
	 */
	public  function SetTitleBarColor($color){}
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 * @return \System\Void|void
	 */
	public  function SetWindowState($state){}
	/**
	 * @return \Avalonia\Native\Interop\AvnWindowState
	 */
	public  function get_WindowState(){}
	/**
	 * @return \System\Void|void
	 */
	public  function TakeFocusFromChildren(){}
	/**
	 * @param \System\Int32|int $enable
	 * @return \System\Void|void
	 */
	public  function SetExtendClientArea($enable){}
	/**
	 * @param \Avalonia\Native\Interop\AvnExtendClientAreaChromeHints $hints
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaHints($hints){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ExtendTitleBarHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function SetExtendTitleBarHeight($value){}
	/**
	 * @uses __MicroComIAvnWindowProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnWindowProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnWindowProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnWindowProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
