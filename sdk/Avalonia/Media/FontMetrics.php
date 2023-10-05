<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontMetricsMethodsOverride
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
class FontMetrics extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int16
	 * @property
	 */
	public $DesignEmHeight;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsFixedPitch;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Ascent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Descent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $LineGap;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LineSpacing;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $UnderlinePosition;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $UnderlineThickness;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $StrikethroughPosition;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $StrikethroughThickness;
	/**
	 * @return \System\Int16
	 */
	public  function get_DesignEmHeight(){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public  function set_DesignEmHeight($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedPitch(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsFixedPitch($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Ascent(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Ascent($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Descent(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Descent($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LineGap(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_LineGap($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LineSpacing(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_UnderlinePosition(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_UnderlinePosition($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_UnderlineThickness(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_UnderlineThickness($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StrikethroughPosition(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_StrikethroughPosition($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StrikethroughThickness(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_StrikethroughThickness($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\FontMetrics $left
	 * @param \Avalonia\Media\FontMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\FontMetrics $left
	 * @param \Avalonia\Media\FontMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses FontMetricsMethodsOverride::Equals_1 ($obj)
	 * @uses FontMetricsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
