<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlyphInfoMethodsOverride
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
class GlyphInfo extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Collections\Generic\Comparer_1
	 */
	protected static function get_ClusterAscendingComparer(){}
	/**
	 * @return \System\Collections\Generic\Comparer_1
	 */
	protected static function get_ClusterDescendingComparer(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_GlyphIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_GlyphCluster(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_GlyphAdvance(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_GlyphOffset(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $left
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $left
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses GlyphInfoMethodsOverride::Equals_1 ($obj)
	 * @uses GlyphInfoMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\UInt16& $GlyphIndex
	 * @param \System\Int32& $GlyphCluster
	 * @param \System\Double& $GlyphAdvance
	 * @param \Avalonia\Vector& $GlyphOffset
	 * @return \System\Void|void
	 */
	public  function Deconstruct($GlyphIndex, $GlyphCluster, $GlyphAdvance, $GlyphOffset){}
}
