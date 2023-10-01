<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIShellItemArrayVTableMethodsOverride
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
class __MicroComIShellItemArrayVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pbc
	 * @param \System\Guid* $bhid
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppvOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BindToHandler($this, $pbc, $bhid, $riid, $ppvOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $flags
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyStore($this, $flags, $riid, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $keyType
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyDescriptionList($this, $keyType, $riid, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $AttribFlags
	 * @param \System\UInt16 $sfgaoMask
	 * @param \System\UInt16* $psfgaoAttribs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAttributes($this, $AttribFlags, $sfgaoMask, $psfgaoAttribs){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $pdwNumItems
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCount($this, $pdwNumItems){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwIndex
	 * @param \System\Void** $ppsi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetItemAt($this, $dwIndex, $ppsi){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppenumShellItems
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumItems($this, $ppenumShellItems){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIShellItemArrayVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIShellItemArrayVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
