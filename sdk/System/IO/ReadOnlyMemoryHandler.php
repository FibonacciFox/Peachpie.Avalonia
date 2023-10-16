<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlyMemoryHandlerMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetLength_1($memory){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetLength_2($memory){}
	/**
	 * @return \System\Buffers\MemoryHandle
	 */
	#[MethodOverride] public static function Pin_1($memory){}
	/**
	 * @return \System\Buffers\MemoryHandle
	 */
	#[MethodOverride] private static function Pin_2($memory){}
}
/**
 */
class ReadOnlyMemoryHandler extends \System\ValueType implements 
	\System\IO\IMemoryHandler_1
{
	/**
	 * @uses ReadOnlyMemoryHandlerMethodsOverride::GetLength_1 ($memory)
	 * @uses ReadOnlyMemoryHandlerMethodsOverride::GetLength_2 ($memory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLength(mixed ...$args){}
	/**
	 * @uses ReadOnlyMemoryHandlerMethodsOverride::Pin_1 ($memory)
	 * @uses ReadOnlyMemoryHandlerMethodsOverride::Pin_2 ($memory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Pin(mixed ...$args){}
}
