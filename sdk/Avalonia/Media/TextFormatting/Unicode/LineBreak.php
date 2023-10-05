<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LineBreakMethodsOverride
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
class LineBreak extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $PositionMeasure;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $PositionWrap;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Required;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PositionMeasure(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PositionWrap(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Required(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $left
	 * @param \Avalonia\Media\TextFormatting\Unicode\LineBreak $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses LineBreakMethodsOverride::Equals_1 ($obj)
	 * @uses LineBreakMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
