<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDispatcherQueueVTableMethodsOverride
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
class __MicroComIDispatcherQueueVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @uses __MicroComIDispatcherQueueVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDispatcherQueueVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
