<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class BidiReorderer extends \System\Object
{
	/**
	 * @return \Avalonia\Media\TextFormatting\BidiReorderer
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Span_1 $textRuns
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Int32|int $firstTextSourceIndex
	 * @return \Avalonia\Media\TextFormatting\IndexedTextRun[]
	 */
	public  function BidiReorder($textRuns, $flowDirection, $firstTextSourceIndex){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $run
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRunBidiLevel($run, $flowDirection){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LinearReorder(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MergeRangeWithPrevious($index){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
