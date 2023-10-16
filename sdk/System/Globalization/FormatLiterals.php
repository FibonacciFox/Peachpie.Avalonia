<?php
namespace System\Globalization;
/**
 */
class FormatLiterals extends \System\ValueType
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $AppCompatLiteral;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $dd;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $hh;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $mm;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ss;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ff;
	/**
	 * @return \System\String|string
	 */
	protected  function get_Start(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DayHourSep(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_HourMinuteSep(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_MinuteSecondSep(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_SecondFractionSep(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_End(){}
	/**
	 * @param \System\Boolean $isNegative
	 * @return \System\Globalization\FormatLiterals
	 */
	protected static function InitInvariant($isNegative){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Boolean $useInvariantFieldLengths
	 * @return \System\Void|void
	 */
	protected  function Init($format, $useInvariantFieldLengths){}
}
