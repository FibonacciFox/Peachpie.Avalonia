<?php
namespace System\Globalization;
final class FormatLiterals extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $AppCompatLiteral;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $dd;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $hh;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $mm;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $ss;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $ff;
	/**
	 * @param \System\Boolean|bool $isNegative
	 * @return \System\Globalization\TimeSpanFormat+FormatLiterals
	 */
	protected static function InitInvariant($isNegative){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Boolean|bool $useInvariantFieldLengths
	 * @return \System\Void|void
	 */
	protected function Init($format, $useInvariantFieldLengths){}
}