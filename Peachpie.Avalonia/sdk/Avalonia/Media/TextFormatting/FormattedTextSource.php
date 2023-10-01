<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class FormattedTextSource extends \System\ValueType implements 
	\Avalonia\Media\TextFormatting\ITextSource
{
	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function GetTextRun($textSourceIndex){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultProperties
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textModifier
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateTextStyleRun($text, $firstTextSourceIndex, $defaultProperties, $textModifier){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoerceLength($text, $length){}
}
