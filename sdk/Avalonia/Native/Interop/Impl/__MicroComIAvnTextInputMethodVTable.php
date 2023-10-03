<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnTextInputMethodVTableMethodsOverride
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
class __MicroComIAvnTextInputMethodVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $client
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetClient($this, $client){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Reset($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetCursorRect($this, $rect){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $text
	 * @param \System\Int32|int $anchorOffset
	 * @param \System\Int32|int $cursorOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetSurroundingText($this, $text, $anchorOffset, $cursorOffset){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnTextInputMethodVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnTextInputMethodVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
