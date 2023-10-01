<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIVisualCollectionVTableMethodsOverride
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
class __MicroComIVisualCollectionVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCount($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @param \System\Void* $sibling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertAbove($this, $newChild, $sibling){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertAtBottom($this, $newChild){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertAtTop($this, $newChild){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @param \System\Void* $sibling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertBelow($this, $newChild, $sibling){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Remove($this, $child){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveAll($this){}
	/**
	 * @uses __MicroComIVisualCollectionVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIVisualCollectionVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
