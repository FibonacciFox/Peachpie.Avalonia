<?php
namespace System\Globalization;
/**
 */
class TimeSpanToken extends \System\ValueType
{
	/**
	 * @var \System\Globalization\TimeSpanParse+TTT
	 * @field
	 */
	protected $_ttt;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_num;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_zeroes;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $_sep;
	/**
	 * @return \System\Boolean
	 */
	public  function NormalizeAndValidateFraction(){}
}
