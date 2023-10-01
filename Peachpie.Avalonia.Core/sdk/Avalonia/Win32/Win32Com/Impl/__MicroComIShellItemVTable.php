<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIShellItemVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIShellItemVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BindToHandler($this, $pbc, $bhid, $riid, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppsi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParent($this, $ppsi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $sigdnName
	 * @param \System\Char** $ppszName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDisplayName($this, $sigdnName, $ppszName){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $sfgaoMask
	 * @param \System\UInt32* $psfgaoAttribs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAttributes($this, $sfgaoMask, $psfgaoAttribs){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @param \System\UInt32 $hint
	 * @param \System\Int32* $piOrder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Compare($this, $psi, $hint, $piOrder){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIShellItemVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIShellItemVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
