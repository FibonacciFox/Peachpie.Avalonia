<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnCursorFactoryVTableMethodsOverride
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
class __MicroComIAvnCursorFactoryVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnStandardCursorType $cursorType
	 * @param \System\Void** $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCursor($this, $cursorType, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $bitmapData
	 * @param \System\IntPtr $length
	 * @param \Avalonia\Native\Interop\AvnPixelSize $hotPixel
	 * @param \System\Void** $retOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCustomCursor($this, $bitmapData, $length, $hotPixel, $retOut){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnCursorFactoryVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnCursorFactoryVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
