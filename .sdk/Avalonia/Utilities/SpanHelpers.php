<?php
namespace Avalonia\Utilities;
class SpanHelpers extends \System\Object
{


	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\UInt32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryParseUInt($span, $style, $provider, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Int32& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryParseInt($span, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Double& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryParseDouble($span, $style, $provider, &$value){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Byte& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryParseByte($span, $style, $provider, &$value){}
}