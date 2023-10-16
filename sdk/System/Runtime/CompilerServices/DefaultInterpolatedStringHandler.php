<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultInterpolatedStringHandlerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_2($value, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_3($value, $alignment){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_4($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_5($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_6($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_7($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_8($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_9($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Grow_1($additionalChars){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Grow_2(){}
}
/**
 */
class DefaultInterpolatedStringHandler extends \System\ValueType
{
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @return \System\Int32|int
	 */
	protected static function GetDefaultLength($literalLength, $formattedCount){}
	/**
	 * @return \System\String|string
	 */
	public  function ToStringAndClear(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Clear(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function AppendLiteral($value){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendStringDirect($value){}
	/**
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_1 ($value)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_2 ($value, $format)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_3 ($value, $alignment)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_4 ($value, $alignment, $format)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_5 ($value)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_6 ($value, $alignment, $format)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_7 ($value)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_8 ($value, $alignment, $format)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::AppendFormatted_9 ($value, $alignment, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AppendFormatted(mixed ...$args){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendFormattedSlow($value){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean
	 */
	protected static function HasCustomFormatter($provider){}
	/**
	 * @param \System\Runtime\CompilerServices\T $value
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendCustomFormatter($value, $format){}
	/**
	 * @param \System\Int32|int $startingPos
	 * @param \System\Int32|int $alignment
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendOrInsertAlignmentIfNeeded($startingPos, $alignment){}
	/**
	 * @param \System\Int32|int $additionalChars
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacityForAdditionalChars($additionalChars){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowThenCopyString($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowThenCopySpan($value){}
	/**
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::Grow_1 ($additionalChars)
	 * @uses DefaultInterpolatedStringHandlerMethodsOverride::Grow_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Grow(mixed ...$args){}
	/**
	 * @param \System\UInt32 $requiredMinCapacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GrowCore($requiredMinCapacity){}
}
