<?php
namespace Avalonia\Media;
/**
 */
class TextSourceImplementation extends \System\Object implements 
	\Avalonia\Media\TextFormatting\ITextSource
{
	/**
	 * @param \System\Int32|int $textSourceCharacterIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function GetTextRun($textSourceCharacterIndex){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
