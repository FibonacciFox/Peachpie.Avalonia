<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TryWriteInterpolatedStringHandlerOverride {
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_1 ($value){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\String|string $format
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_2 ($value, $format){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\Int32|int $alignment
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_3 ($value, $alignment){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_4 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_6 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_8 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function AppendFormatted_9 ($value, $alignment, $format){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Boolean& &$shouldAppend
	 */
	#[MethodOverride]public function __construct_1 ($literalLength, $formattedCount, $destination, &$shouldAppend){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Boolean& &$shouldAppend
	 */
	#[MethodOverride]public function __construct_2 ($literalLength, $formattedCount, $destination, $provider, &$shouldAppend){}
}
final class TryWriteInterpolatedStringHandler extends \System\ValueType
{
	use TryWriteInterpolatedStringHandlerOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_pos;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_success;
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public function AppendLiteral($value){}
	private function AppendStringDirect($value){}
	/**
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_1 <br>public , args: ($value)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_2 <br>public , args: ($value, $format)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_3 <br>public , args: ($value, $alignment)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_4 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_5 <br>public , args: ($value)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_6 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_7 <br>public , args: ($value)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_8 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::AppendFormatted_9 <br>public , args: ($value, $alignment, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function AppendFormatted (\override ...$args){}
	private function AppendCustomFormatter($value, $format){}
	private function TryAppendOrInsertAlignmentIfNeeded($startingPos, $alignment){}
	private function Fail(){}
	/**
	 * @uses TryWriteInterpolatedStringHandlerOverride::__construct_1 <br>public , args: ($literalLength, $formattedCount, $destination, &$shouldAppend)<br>
	 * @uses TryWriteInterpolatedStringHandlerOverride::__construct_2 <br>public , args: ($literalLength, $formattedCount, $destination, $provider, &$shouldAppend)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}