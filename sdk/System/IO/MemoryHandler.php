<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemoryHandlerMethodsOverride
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
class MemoryHandler extends \System\ValueType implements 
	\System\IO\IMemoryHandler_1
{
	/**
	 * @uses MemoryHandlerMethodsOverride::GetLength_1 ($memory)
	 * @uses MemoryHandlerMethodsOverride::GetLength_2 ($memory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLength(mixed ...$args){}
	/**
	 * @uses MemoryHandlerMethodsOverride::Pin_1 ($memory)
	 * @uses MemoryHandlerMethodsOverride::Pin_2 ($memory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Pin(mixed ...$args){}
}
