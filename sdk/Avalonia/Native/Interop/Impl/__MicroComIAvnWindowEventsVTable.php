<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowEventsVTableMethodsOverride
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
class __MicroComIAvnWindowEventsVTable extends \Avalonia\Native\Interop\Impl\__MicroComIAvnWindowBaseEventsVTable
{
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Closing($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WindowStateChanged($this, $state){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GotInputWhenDisabled($this){}
	/**
	 * @uses __MicroComIAvnWindowEventsVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnWindowEventsVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
