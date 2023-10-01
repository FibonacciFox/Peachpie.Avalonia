<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIShellItemProxyMethodsOverride
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
class __MicroComIShellItemProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IShellItem
{
	/**
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function BindToHandler($pbc, $bhid, $riid){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IShellItem
	 */
	public  function get_Parent(){}
	/**
	 * @param \System\UInt32 $sigdnName
	 * @return \System\Char*
	 */
	public  function GetDisplayName($sigdnName){}
	/**
	 * @param \System\UInt32 $sfgaoMask
	 * @return \System\UInt32
	 */
	public  function GetAttributes($sfgaoMask){}
	/**
	 * @param \Avalonia\Win32\Win32Com\IShellItem $psi
	 * @param \System\UInt32 $hint
	 * @return \System\Int32|int
	 */
	public  function Compare($psi, $hint){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIShellItemProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIShellItemProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIShellItemProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIShellItemProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
