<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIResourceVTableMethodsOverride
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
class __MicroComIDXGIResourceVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $pSharedHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSharedHandle($this, $pSharedHandle){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $pUsage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUsage($this, $pUsage){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $EvictionPriority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetEvictionPriority($this, $EvictionPriority){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $pEvictionPriority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEvictionPriority($this, $pEvictionPriority){}
	/**
	 * @uses __MicroComIDXGIResourceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIResourceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
