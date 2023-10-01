<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIFileOpenDialogVTableMethodsOverride
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
class __MicroComIFileOpenDialogVTable extends \Avalonia\Win32\Win32Com\Impl\__MicroComIFileDialogVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppenum
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResults($this, $ppenum){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppsai
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSelectedItems($this, $ppsai){}
	/**
	 * @uses __MicroComIFileOpenDialogVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIFileOpenDialogVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
