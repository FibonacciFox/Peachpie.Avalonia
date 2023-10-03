<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDropTargetVTableMethodsOverride
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
class __MicroComIDropTargetVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DragEnter($this, $pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DragOver($this, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DragLeave($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDataObj
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Drop($this, $pDataObj, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDropTargetVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIDropTargetVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
