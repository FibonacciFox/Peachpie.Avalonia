<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnMenuItemVTableMethodsOverride
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
class __MicroComIAvnMenuItemVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $menu
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetSubMenu($this, $menu){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $utf8String
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetTitle($this, $utf8String){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnKey $key
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetGesture($this, $key, $modifiers){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $predicate
	 * @param \System\Void* $callback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetAction($this, $predicate, $callback){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $isChecked
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetIsChecked($this, $isChecked){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnMenuItemToggleType $toggleType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetToggleType($this, $toggleType){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetIcon($this, $data, $length){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnMenuItemVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnMenuItemVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
