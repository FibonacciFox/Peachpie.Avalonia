<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontCollectionKeyMethodsOverride
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
class FontCollectionKey extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\FontStyle
	 */
	public  function get_Style(){}
	/**
	 * @param \Avalonia\Media\FontStyle $value
	 * @return \System\Void|void
	 */
	public  function set_Style($value){}
	/**
	 * @return \Avalonia\Media\FontWeight
	 */
	public  function get_Weight(){}
	/**
	 * @param \Avalonia\Media\FontWeight $value
	 * @return \System\Void|void
	 */
	public  function set_Weight($value){}
	/**
	 * @return \Avalonia\Media\FontStretch
	 */
	public  function get_Stretch(){}
	/**
	 * @param \Avalonia\Media\FontStretch $value
	 * @return \System\Void|void
	 */
	public  function set_Stretch($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $left
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $left
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses FontCollectionKeyMethodsOverride::Equals_1 ($obj)
	 * @uses FontCollectionKeyMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\FontStyle& $Style
	 * @param \Avalonia\Media\FontWeight& $Weight
	 * @param \Avalonia\Media\FontStretch& $Stretch
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Style, $Weight, $Stretch){}
}
