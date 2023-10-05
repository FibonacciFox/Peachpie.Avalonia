<?php
namespace Avalonia\Media\Transformation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DataLayoutMethodsOverride
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
class DataLayout extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+SkewLayout
	 * @field
	 */
	public $Skew;
	/**
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+ScaleLayout
	 * @field
	 */
	public $Scale;
	/**
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+TranslateLayout
	 * @field
	 */
	public $Translate;
	/**
	 * @var \Avalonia\Media\Transformation\TransformOperation+DataLayout+RotateLayout
	 * @field
	 */
	public $Rotate;
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\DataLayout $left
	 * @param \Avalonia\Media\Transformation\DataLayout $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\DataLayout $left
	 * @param \Avalonia\Media\Transformation\DataLayout $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses DataLayoutMethodsOverride::Equals_1 ($obj)
	 * @uses DataLayoutMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
