<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlyphMetricsMethodsOverride
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
class GlyphMetrics extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $XBearing;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $YBearing;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Height;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_XBearing(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_XBearing($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_YBearing(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_YBearing($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\GlyphMetrics $left
	 * @param \Avalonia\Media\GlyphMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\GlyphMetrics $left
	 * @param \Avalonia\Media\GlyphMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses GlyphMetricsMethodsOverride::Equals_1 ($obj)
	 * @uses GlyphMetricsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
