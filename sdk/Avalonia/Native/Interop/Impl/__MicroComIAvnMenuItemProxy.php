<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnMenuItemProxyMethodsOverride
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
class __MicroComIAvnMenuItemProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnMenuItem
{
	/**
	 * @var \Avalonia\Controls\NativeMenuItemBase
	 * @property
	 */
	public $ManagedMenuItem;
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
	 * @return \Avalonia\Controls\NativeMenuItemBase
	 */
	public  function get_ManagedMenuItem(){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItemBase $value
	 * @return \System\Void|void
	 */
	public  function set_ManagedMenuItem($value){}
	/**
	 * @param \System\String|string $title
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateTitle($title){}
	/**
	 * @param \System\Boolean $isChecked
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateIsChecked($isChecked){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItemToggleType $toggleType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateToggleType($toggleType){}
	/**
	 * @param \Avalonia\Media\Imaging\IBitmap $icon
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateIcon($icon){}
	/**
	 * @param \Avalonia\Input\KeyGesture $gesture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateGesture($gesture){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItem $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateAction($item){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItemBase $nativeMenuItem
	 * @return \System\Void|void
	 */
	protected  function Initialize($nativeMenuItem){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Deinitialize(){}
	/**
	 * @param \Avalonia\Native\AvaloniaNativeMenuExporter $exporter
	 * @param \Avalonia\Native\Interop\IAvaloniaNativeFactory $factory
	 * @param \Avalonia\Controls\NativeMenuItem $item
	 * @return \System\Void|void
	 */
	protected  function Update($exporter, $factory, $item){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 * @return \System\Void|void
	 */
	public  function SetSubMenu($menu){}
	/**
	 * @param \System\String|string $utf8String
	 * @return \System\Void|void
	 */
	public  function SetTitle($utf8String){}
	/**
	 * @param \Avalonia\Native\Interop\AvnKey $key
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @return \System\Void|void
	 */
	public  function SetGesture($key, $modifiers){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnPredicateCallback $predicate
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $callback
	 * @return \System\Void|void
	 */
	public  function SetAction($predicate, $callback){}
	/**
	 * @param \System\Int32|int $isChecked
	 * @return \System\Void|void
	 */
	public  function SetIsChecked($isChecked){}
	/**
	 * @param \Avalonia\Native\Interop\AvnMenuItemToggleType $toggleType
	 * @return \System\Void|void
	 */
	public  function SetToggleType($toggleType){}
	/**
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 * @return \System\Void|void
	 */
	public  function SetIcon($data, $length){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnMenuItemProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnMenuItemProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnMenuItemProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnMenuItemProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
