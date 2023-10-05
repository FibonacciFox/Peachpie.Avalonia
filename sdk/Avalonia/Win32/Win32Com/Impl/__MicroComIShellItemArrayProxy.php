<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIShellItemArrayProxyMethodsOverride
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
class __MicroComIShellItemArrayProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IShellItemArray
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
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function BindToHandler($pbc, $bhid, $riid){}
	/**
	 * @param \System\UInt16 $flags
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function GetPropertyStore($flags, $riid){}
	/**
	 * @param \System\Void* $keyType
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function GetPropertyDescriptionList($keyType, $riid){}
	/**
	 * @param \System\Int32|int $AttribFlags
	 * @param \System\UInt16 $sfgaoMask
	 * @return \System\UInt16
	 */
	public  function GetAttributes($AttribFlags, $sfgaoMask){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $dwIndex
	 * @return \Avalonia\Win32\Win32Com\IShellItem
	 */
	public  function GetItemAt($dwIndex){}
	/**
	 * @return \System\Void*
	 */
	public  function EnumItems(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIShellItemArrayProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIShellItemArrayProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIShellItemArrayProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIShellItemArrayProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
