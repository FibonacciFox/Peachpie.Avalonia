<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StandardFormatOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @return \System\Buffers\StandardFormat
	 */
	#[MethodOverride]public static function Parse_1 ($format){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @return \System\Buffers\StandardFormat
	 */
	#[MethodOverride]public static function Parse_2 ($format){}
}
final class StandardFormat extends \System\ValueType implements
	\System\IEquatable_1
{
	use StandardFormatOverride;
	/**
	 * @field
	 * @var \System\Byte
	 */
	const NoPrecision = '255';
	/**
	 * @field
	 * @var \System\Byte
	 */
	const MaxPrecision = '99';
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $Symbol;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Precision;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasPrecision;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDefault;
	/**
	 * @param \System\Char $symbol
	 * @return \System\Buffers\StandardFormat
	 */
	public static function op_Implicit($symbol){}
	/**
	 * @uses StandardFormatOverride::Parse_1 <br>public , args: ($format)<br>
	 * @uses StandardFormatOverride::Parse_2 <br>public , args: ($format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Buffers\StandardFormat|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Buffers\StandardFormat& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($format, &$result){}
	private static function ParseHelper($format, &$standardFormat, $throws){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected function Format($destination){}
	/**
	 * @param \System\Buffers\StandardFormat $left
	 * @param \System\Buffers\StandardFormat $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Buffers\StandardFormat $left
	 * @param \System\Buffers\StandardFormat $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Char $symbol
	 * @param \System\Byte $precision
	 */
	public function __construct($symbol, $precision){}
}