<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVisualCollectionProxyMethodsOverride
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
class __MicroComIVisualCollectionProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IVisualCollection
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RuntimeClassName;
	/**
	 * @var \Avalonia\Win32\WinRT\TrustLevel
	 * @property
	 */
	public readonly $TrustLevel;
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
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @param \Avalonia\Win32\WinRT\IVisual $sibling
	 * @return \System\Void|void
	 */
	public  function InsertAbove($newChild, $sibling){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @return \System\Void|void
	 */
	public  function InsertAtBottom($newChild){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @return \System\Void|void
	 */
	public  function InsertAtTop($newChild){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $newChild
	 * @param \Avalonia\Win32\WinRT\IVisual $sibling
	 * @return \System\Void|void
	 */
	public  function InsertBelow($newChild, $sibling){}
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $child
	 * @return \System\Void|void
	 */
	public  function Remove($child){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveAll(){}
	/**
	 * @uses __MicroComIVisualCollectionProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIVisualCollectionProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIVisualCollectionProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIVisualCollectionProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
