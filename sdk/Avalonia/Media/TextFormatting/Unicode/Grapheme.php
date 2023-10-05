<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class Grapheme extends \System\ValueType
{
	/**
	 * @var \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 * @property
	 */
	public readonly $FirstCodepoint;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 */
	public  function get_FirstCodepoint(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Offset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
}
