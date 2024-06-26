<?php
namespace System\Globalization;
final class DateTimeFormatInfoScanner extends \System\Object
{
	/**
	 * @field
	 * @var \System\Collections\Generic\List_1[System\String]
	 */
	protected $m_dateWords;
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32|int $currentIndex
	 * @return \System\Int32|int
	 */
	protected static function SkipWhiteSpacesAndNonLetter($pattern, $currentIndex){}
	/**
	 * @param \System\String|string $formatPostfix
	 * @param \System\String|string $str
	 * @return \System\Void|void
	 */
	protected function AddDateWordOrPostfix($formatPostfix, $str){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32|int $index
	 * @param \System\String|string $formatPostfix
	 * @return \System\Int32|int
	 */
	protected function AddDateWords($pattern, $index, $formatPostfix){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Char $ch
	 * @param \System\Int32|int $index
	 * @param \System\Int32& &$count
	 * @return \System\Int32|int
	 */
	protected static function ScanRepeatChar($pattern, $ch, $index, &$count){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	protected function AddIgnorableSymbols($text){}
	/**
	 * @param \System\String|string $pattern
	 * @return \System\Void|void
	 */
	protected function ScanDateWord($pattern){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\String[]|array
	 */
	protected function GetDateWordsOfDTFI($dtfi){}
	/**
	 * @param \System\String $monthNames
	 * @param \System\String $genitiveMonthNames
	 * @param \System\String $abbrevMonthNames
	 * @param \System\String $genitiveAbbrevMonthNames
	 * @return \System\Globalization\FORMATFLAGS
	 */
	protected static function GetFormatFlagGenitiveMonth($monthNames, $genitiveMonthNames, $abbrevMonthNames, $genitiveAbbrevMonthNames){}
	/**
	 * @param \System\String $monthNames
	 * @param \System\String $genitveMonthNames
	 * @param \System\String $abbrevMonthNames
	 * @param \System\String $genetiveAbbrevMonthNames
	 * @return \System\Globalization\FORMATFLAGS
	 */
	protected static function GetFormatFlagUseSpaceInMonthNames($monthNames, $genitveMonthNames, $abbrevMonthNames, $genetiveAbbrevMonthNames){}
	/**
	 * @param \System\String $dayNames
	 * @param \System\String $abbrevDayNames
	 * @return \System\Globalization\FORMATFLAGS
	 */
	protected static function GetFormatFlagUseSpaceInDayNames($dayNames, $abbrevDayNames){}
	/**
	 * @param \System\Int32|int $calID
	 * @return \System\Globalization\FORMATFLAGS
	 */
	protected static function GetFormatFlagUseHebrewCalendar($calID){}
	private static function ArrayElementsHaveSpace($array){}
	private static function ArrayElementsBeginWithDigit($array){}
	/**
	 */
	public function __construct(){}
}