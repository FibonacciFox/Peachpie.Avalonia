<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextRunBoundsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class TextRunBounds extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TextSourceCharacterIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Rectangle;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @property
	 */
	public readonly $TextRun;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextSourceCharacterIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rectangle(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function get_TextRun(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $left
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $left
	 * @param \Avalonia\Media\TextFormatting\TextRunBounds $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextRunBoundsMethodsOverride::Equals_1 ($obj)
	 * @uses TextRunBoundsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
