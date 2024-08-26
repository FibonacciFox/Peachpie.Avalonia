<?php
namespace System\Globalization;
final class TimeSpanRawInfo extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TTT
	 */
	protected $_lastSeenTTT;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_tokenCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_sepCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_numCount;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 */
	protected $_numbers0;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 */
	protected $_numbers1;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 */
	protected $_numbers2;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 */
	protected $_numbers3;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TimeSpanToken
	 */
	protected $_numbers4;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals0;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals1;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals2;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals3;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals4;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_literals5;
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullAppCompatMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function PartialAppCompatMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullDMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullHMMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullDHMMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullHMSMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullDHMSMatch($pattern){}
	/**
	 * @param \System\Globalization\TimeSpanFormat+FormatLiterals $pattern
	 * @return \System\Boolean|bool
	 */
	protected function FullHMSFMatch($pattern){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Void|void
	 */
	protected function Init($dtfi){}
	/**
	 * @param \System\Globalization\TimeSpanParse+TimeSpanToken& $tok
	 * @param \System\Globalization\TimeSpanParse+TimeSpanResult& $result
	 * @return \System\Boolean|bool
	 */
	protected function ProcessToken($tok, $result){}
	private function AddSep($sep, $result){}
	private function AddNum($num, $result){}
}