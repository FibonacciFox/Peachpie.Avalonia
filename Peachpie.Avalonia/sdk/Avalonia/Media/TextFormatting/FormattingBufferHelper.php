<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FormattingBufferHelperMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ClearThenResetIfTooLarge_1($arrayBuilder){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ClearThenResetIfTooLarge_2($list){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ClearThenResetIfTooLarge_3($stack){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ClearThenResetIfTooLarge_4($dictionary){}
}
/**
 */
class FormattingBufferHelper extends \System\Object
{
	/**
	 * @uses FormattingBufferHelperMethodsOverride::ClearThenResetIfTooLarge_1 ($arrayBuilder)
	 * @uses FormattingBufferHelperMethodsOverride::ClearThenResetIfTooLarge_2 ($list)
	 * @uses FormattingBufferHelperMethodsOverride::ClearThenResetIfTooLarge_3 ($stack)
	 * @uses FormattingBufferHelperMethodsOverride::ClearThenResetIfTooLarge_4 ($dictionary)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ClearThenResetIfTooLarge(mixed ...$args){}
	/**
	 * @param \System\UInt32 $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsBufferTooLarge($capacity){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RoundUpToPowerOf2($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
