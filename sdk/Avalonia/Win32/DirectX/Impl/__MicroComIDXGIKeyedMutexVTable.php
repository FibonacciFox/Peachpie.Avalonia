<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIKeyedMutexVTableMethodsOverride
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
class __MicroComIDXGIKeyedMutexVTable extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $Key
	 * @param \System\UInt32 $dwMilliseconds
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AcquireSync($this, $Key, $dwMilliseconds){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $Key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReleaseSync($this, $Key){}
	/**
	 * @uses __MicroComIDXGIKeyedMutexVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDXGIKeyedMutexVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
