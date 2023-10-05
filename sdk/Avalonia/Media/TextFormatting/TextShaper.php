<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextShaperMethodsOverride
{
	/**
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	#[MethodOverride] public  function ShapeText_1($text, $options){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	#[MethodOverride] public  function ShapeText_2($text, $options){}
}
/**
 */
class TextShaper extends \System\Object
{
	/**
	 * @var \Avalonia\Media\TextFormatting\TextShaper
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \Avalonia\Media\TextFormatting\TextShaper
	 */
	public static function get_Current(){}
	/**
	 * @uses TextShaperMethodsOverride::ShapeText_1 ($text, $options)
	 * @uses TextShaperMethodsOverride::ShapeText_2 ($text, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShapeText(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
