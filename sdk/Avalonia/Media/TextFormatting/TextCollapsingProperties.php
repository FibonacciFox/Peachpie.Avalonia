<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextCollapsingProperties extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function get_Symbol(){}
	/**
	 * @return \Avalonia\Media\FlowDirection
	 */
	public  function get_FlowDirection(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @return \Avalonia\Media\TextFormatting\TextRun[]
	 */
	public  function Collapse($textLine){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
