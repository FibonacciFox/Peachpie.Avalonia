<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnMenuProxyMethodsOverride
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
class __MicroComIAvnMenuProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnMenu
{
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
	 * @return \System\Void|void
	 */
	public  function RaiseNeedsUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RaiseOpening(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RaiseClosed(){}
	/**
	 * @return \Avalonia\Controls\NativeMenu
	 */
	protected  function get_ManagedMenu(){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ManagedMenu($value){}
	/**
	 * @param \Avalonia\Native\Interop\IAvaloniaNativeFactory $factory
	 * @return \Avalonia\Native\Interop\Impl\__MicroComIAvnMenuProxy
	 */
	public static function Create($factory){}
	/**
	 * @param \Avalonia\Native\Interop\Impl\__MicroComIAvnMenuItemProxy $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAndDispose($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Native\Interop\Impl\__MicroComIAvnMenuItemProxy $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveExistingTo($index, $item){}
	/**
	 * @param \Avalonia\Native\Interop\IAvaloniaNativeFactory $factory
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Controls\NativeMenuItemBase $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateNewAt($factory, $index, $item){}
	/**
	 * @param \Avalonia\Native\Interop\IAvaloniaNativeFactory $factory
	 * @param \Avalonia\Controls\NativeMenuItemBase $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateNew($factory, $item){}
	/**
	 * @param \Avalonia\Native\AvaloniaNativeMenuExporter $exporter
	 * @param \Avalonia\Controls\NativeMenu $managedMenu
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	protected  function Initialize($exporter, $managedMenu, $title){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deinitialise(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvaloniaNativeFactory $factory
	 * @param \Avalonia\Controls\NativeMenu $menu
	 * @return \System\Void|void
	 */
	protected  function Update($factory, $menu){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnMenuItemsChanged($sender, $e){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Native\Interop\IAvnMenuItem $item
	 * @return \System\Void|void
	 */
	public  function InsertItem($index, $item){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenuItem $item
	 * @return \System\Void|void
	 */
	public  function RemoveItem($item){}
	/**
	 * @param \System\String|string $utf8String
	 * @return \System\Void|void
	 */
	public  function SetTitle($utf8String){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnMenuProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnMenuProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnMenuProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnMenuProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
