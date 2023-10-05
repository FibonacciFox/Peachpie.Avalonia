<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextRunEnumerator extends \System\ValueType
{
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @property
	 */
	public $Current;
	/**
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function get_Current(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Current($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
}
