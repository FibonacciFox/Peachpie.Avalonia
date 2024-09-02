<?php
namespace Avalonia\Media\TextFormatting;
class TextEllipsisHelper extends \System\Object
{

	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @param \Avalonia\Media\TextFormatting\TextCollapsingProperties $properties
	 * @param \System\Boolean|bool $isWordEllipsis
	 * @return \Avalonia\Media\TextFormatting\TextRun[]
	 */
	public static function Collapse($textLine, $properties, $isWordEllipsis){}
	private static function CreateCollapsedRuns($textLine, $collapsedLength, $flowDirection, $shapedSymbol){}
}