<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnClipboardVTableMethodsOverride
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
class __MicroComIAvnClipboardVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetText($this, $type, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Byte* $utf8Text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetText($this, $type, $utf8Text){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObtainFormats($this, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStrings($this, $type, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void* $utf8Text
	 * @param \System\Int32|int $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetBytes($this, $type, $utf8Text, $len){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void** $ppv
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBytes($this, $type, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Clear($this){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnClipboardVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnClipboardVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
