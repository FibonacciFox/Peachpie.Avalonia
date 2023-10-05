<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlyphRunMetricsMethodsOverride
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
class GlyphRunMetrics extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Baseline;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $WidthIncludingTrailingWhitespace;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TrailingWhitespaceLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $NewLineLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $FirstCluster;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $LastCluster;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Baseline(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Baseline($value){}
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
	public  function get_Height(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
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
	 * @return \System\Int32|int
	 */
	public  function get_NewLineLength(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_NewLineLength($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FirstCluster(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_FirstCluster($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LastCluster(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_LastCluster($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\GlyphRunMetrics $left
	 * @param \Avalonia\Media\GlyphRunMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\GlyphRunMetrics $left
	 * @param \Avalonia\Media\GlyphRunMetrics $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses GlyphRunMetricsMethodsOverride::Equals_1 ($obj)
	 * @uses GlyphRunMetricsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
