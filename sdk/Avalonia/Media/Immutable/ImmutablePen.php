<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutablePenMethodsOverride
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
class ImmutablePen extends \System\Object implements 
	\Avalonia\Media\IPen,
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Brush(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Thickness(){}
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public  function get_DashStyle(){}
	/**
	 * @return \Avalonia\Media\PenLineCap
	 */
	public  function get_LineCap(){}
	/**
	 * @return \Avalonia\Media\PenLineJoin
	 */
	public  function get_LineJoin(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MiterLimit(){}
	/**
	 * @uses ImmutablePenMethodsOverride::Equals_1 ($obj)
	 * @uses ImmutablePenMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
