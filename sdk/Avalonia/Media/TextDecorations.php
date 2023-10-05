<?php
namespace Avalonia\Media;
/**
 */
class TextDecorations extends \System\Object
{
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $Underline;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $Strikethrough;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $Overline;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $Baseline;
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public static function get_Underline(){}
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public static function get_Strikethrough(){}
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public static function get_Overline(){}
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public static function get_Baseline(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
