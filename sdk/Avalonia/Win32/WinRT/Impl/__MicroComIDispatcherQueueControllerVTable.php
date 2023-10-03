<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDispatcherQueueControllerVTableMethodsOverride
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
class __MicroComIDispatcherQueueControllerVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDispatcherQueue($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $operation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShutdownQueueAsync($this, $operation){}
	/**
	 * @uses __MicroComIDispatcherQueueControllerVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDispatcherQueueControllerVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
