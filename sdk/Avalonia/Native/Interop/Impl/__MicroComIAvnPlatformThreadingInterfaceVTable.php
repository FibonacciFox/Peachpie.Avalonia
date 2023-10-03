<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnPlatformThreadingInterfaceVTableMethodsOverride
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
class __MicroComIAvnPlatformThreadingInterfaceVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentThreadIsLoopThread($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $cb
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetEvents($this, $cb){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateLoopCancellation($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $cancel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunLoop($this, $cancel){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Signal($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $ms
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateTimer($this, $ms){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RequestBackgroundProcessing($this){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnPlatformThreadingInterfaceVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnPlatformThreadingInterfaceVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
