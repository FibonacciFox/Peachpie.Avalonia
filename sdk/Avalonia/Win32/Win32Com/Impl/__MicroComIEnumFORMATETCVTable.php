<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIEnumFORMATETCVTableMethodsOverride
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
class __MicroComIEnumFORMATETCVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $pceltFetched
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Next($this, $celt, $rgelt, $pceltFetched){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $celt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Skip($this, $celt){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Reset($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppenum
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Clone($this, $ppenum){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIEnumFORMATETCVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIEnumFORMATETCVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
