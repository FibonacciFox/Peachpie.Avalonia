<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextLineMetricsMethodsOverride
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
class TextLineMetrics extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasOverflowed(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_HasOverflowed($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NewlineLength(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_NewlineLength($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Start(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Start($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TextBaseline(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_TextBaseline($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TrailingWhitespaceLength(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_TrailingWhitespaceLength($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_WidthIncludingTrailingWhitespace(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_WidthIncludingTrailingWhitespace($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Extent(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Extent($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangAfter(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OverhangAfter($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangLeading(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OverhangLeading($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OverhangTrailing(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OverhangTrailing($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $left
	 * @param \Avalonia\Media\TextFormatting\TextLineMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextLineMetricsMethodsOverride::Equals_1 ($obj)
	 * @uses TextLineMetricsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
