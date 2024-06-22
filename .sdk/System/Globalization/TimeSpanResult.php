<?php
namespace System\Globalization;
final class TimeSpanResult extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\TimeSpan
	 */
	protected $parsedTimeSpan;
	/**
	 * @return \System\Boolean|bool
	 */
	protected function SetNoFormatSpecifierFailure(){}
	/**
	 * @param \System\Char $failingCharacter
	 * @return \System\Boolean|bool
	 */
	protected function SetBadQuoteFailure($failingCharacter){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function SetInvalidStringFailure(){}
	/**
	 * @param \System\String|string $argumentName
	 * @return \System\Boolean|bool
	 */
	protected function SetArgumentNullFailure($argumentName){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function SetOverflowFailure(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function SetBadTimeSpanFailure(){}
	/**
	 * @param \System\Nullable_1 $formatSpecifierCharacter [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected function SetBadFormatSpecifierFailure($formatSpecifierCharacter){}
}