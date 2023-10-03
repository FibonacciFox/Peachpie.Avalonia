<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextEllipsisHelper extends \System\Object
{
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @param \Avalonia\Media\TextFormatting\TextCollapsingProperties $properties
	 * @param \System\Boolean $isWordEllipsis
	 * @return \Avalonia\Media\TextFormatting\TextRun[]
	 */
	public static function Collapse($textLine, $properties, $isWordEllipsis){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @param \System\Int32|int $collapsedLength
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \Avalonia\Media\TextFormatting\TextRun $shapedSymbol
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCollapsedRuns($textLine, $collapsedLength, $flowDirection, $shapedSymbol){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
