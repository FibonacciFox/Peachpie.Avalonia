<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnGlSurfaceRenderingSessionVTableMethodsOverride
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
class __MicroComIAvnGlSurfaceRenderingSessionVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPixelSize* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPixelSize($this, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double* $ret
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetScaling($this, $ret){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnGlSurfaceRenderingSessionVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
