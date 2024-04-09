<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AppendInterpolatedStringHandlerOverride {
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
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\Text\StringBuilder $stringBuilder
	 */
	#[MethodOverride]public function __construct_1 ($literalLength, $formattedCount, $stringBuilder){}
	/**
	 * @param \System\Int32|int $literalLength
	 * @param \System\Int32|int $formattedCount
	 * @param \System\Text\StringBuilder $stringBuilder
	 * @param \System\IFormatProvider $provider
	 */
	#[MethodOverride]public function __construct_2 ($literalLength, $formattedCount, $stringBuilder, $provider){}
}
final class AppendInterpolatedStringHandler extends \System\ValueType
{
	use AppendInterpolatedStringHandlerOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\StringBuilder
	 */
	protected $_stringBuilder;
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function AppendLiteral($value){}
	/**
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_1 <br>public , args: ($value)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_2 <br>public , args: ($value, $format)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_3 <br>public , args: ($value, $alignment)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_4 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_5 <br>public , args: ($value)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_6 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_7 <br>public , args: ($value)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_8 <br>public , args: ($value, $alignment, $format)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::AppendFormatted_9 <br>public , args: ($value, $alignment, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AppendFormatted (\override ...$args){}
	private function AppendFormattedWithTempSpace($value, $alignment, $format){}
	private function AppendCustomFormatter($value, $format){}
	/**
	 * @uses AppendInterpolatedStringHandlerOverride::__construct_1 <br>public , args: ($literalLength, $formattedCount, $stringBuilder)<br>
	 * @uses AppendInterpolatedStringHandlerOverride::__construct_2 <br>public , args: ($literalLength, $formattedCount, $stringBuilder, $provider)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}