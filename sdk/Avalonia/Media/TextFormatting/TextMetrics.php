<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextMetricsMethodsOverride
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
class TextMetrics extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $FontRenderingEmSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Ascent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Descent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LineGap;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LineHeight;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $UnderlineThickness;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $UnderlinePosition;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $StrikethroughThickness;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $StrikethroughPosition;
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Ascent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Descent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineGap(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineHeight(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_UnderlineThickness(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_UnderlinePosition(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StrikethroughThickness(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StrikethroughPosition(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextMetricsMethodsOverride::Equals_1 ($obj)
	 * @uses TextMetricsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
