<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionScopedBatchProxyMethodsOverride
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
class __MicroComICompositionScopedBatchProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionScopedBatch
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $IsEnded;
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
	public  function get_IsActive(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_IsEnded(){}
	/**
	 * @return \System\Void|void
	 */
	public  function End(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Resume(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Suspend(){}
	/**
	 * @param \System\Void* $handler
	 * @return \System\Int32|int
	 */
	public  function AddCompleted($handler){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Void|void
	 */
	public  function RemoveCompleted($token){}
	/**
	 * @uses __MicroComICompositionScopedBatchProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionScopedBatchProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionScopedBatchProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionScopedBatchProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
