<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DefaultInterpolatedStringHandlerOverride {
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
	/**
	 * @deprecated
	 * @param \System\Int32|int $additionalChars
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Grow_1 ($additionalChars){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Grow_2 (){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 */
	#[MethodOverride]public function __construct_1 ($literalLength, $formattedCount){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\IFormatProvider $provider
	 */
	#[MethodOverride]public function __construct_2 ($literalLength, $formattedCount, $provider){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $initialBuffer [generic: System\Char]
	 */
	#[MethodOverride]public function __construct_3 ($literalLength, $formattedCount, $provider, $initialBuffer){}
}
final class DefaultInterpolatedStringHandler extends \System\ValueType
{
	use DefaultInterpolatedStringHandlerOverride;


	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @return \System\Int32|int
	 */
	protected static function GetDefaultLength($literalLength, $formattedCount){}
	/**
	 * @return \System\String|string
	 */
	public function ToStringAndClear(){}
	/**
	 * @return \System\Void|void
	 */
	protected function Clear(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function AppendLiteral($value){}
	private function AppendStringDirect($value){}
	/**
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_1 <br>public , args: ($value)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_2 <br>public , args: ($value, $format)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_3 <br>public , args: ($value, $alignment)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_4 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_5 <br>public , args: ($value)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_6 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_7 <br>public , args: ($value)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_8 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::AppendFormatted_9 <br>public , args: ($value, $alignment, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AppendFormatted (\override ...$args){}
	private function AppendFormattedSlow($value){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	protected static function HasCustomFormatter($provider){}
	private function AppendCustomFormatter($value, $format){}
	private function AppendOrInsertAlignmentIfNeeded($startingPos, $alignment){}
	private function EnsureCapacityForAdditionalChars($additionalChars){}
	private function GrowThenCopyString($value){}
	private function GrowThenCopySpan($value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DefaultInterpolatedStringHandlerOverride::Grow_1 <br>private , args: ($additionalChars)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::Grow_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function Grow (\override ...$args){}
	private function GrowCore($requiredMinCapacity){}
	/**
	 * @uses DefaultInterpolatedStringHandlerOverride::__construct_1 <br>public , args: ($literalLength, $formattedCount)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::__construct_2 <br>public , args: ($literalLength, $formattedCount, $provider)<br>
	 * @uses DefaultInterpolatedStringHandlerOverride::__construct_3 <br>public , args: ($literalLength, $formattedCount, $provider, $initialBuffer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}