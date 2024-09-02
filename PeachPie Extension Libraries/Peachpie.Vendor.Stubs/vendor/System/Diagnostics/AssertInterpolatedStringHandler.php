<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssertInterpolatedStringHandlerOverride {
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_1 ($value){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\String|string $format
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_2 ($value, $format){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\Int32|int $alignment
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_3 ($value, $alignment){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_4 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_6 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_8 ($value, $alignment, $format){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AppendFormatted_9 ($value, $alignment, $format){}
}
final class AssertInterpolatedStringHandler extends \System\ValueType
{
	use AssertInterpolatedStringHandlerOverride;

	/**
	 * @return \System\String|string
	 */
	protected function ToStringAndClear(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function AppendLiteral($value){}
	/**
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_1 <br>public , args: ($value)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_2 <br>public , args: ($value, $format)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_3 <br>public , args: ($value, $alignment)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_4 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_5 <br>public , args: ($value)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_6 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_7 <br>public , args: ($value)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_8 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AssertInterpolatedStringHandlerOverride::AppendFormatted_9 <br>public , args: ($value, $alignment, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AppendFormatted (\override ...$args){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\Boolean|bool $condition
	 * @param \System\Boolean& &$shouldAppend
	 */
	public function __construct($literalLength, $formattedCount, $condition, &$shouldAppend){}
}