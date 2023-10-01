<?php
namespace Avalonia\Media\Transformation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BuilderMethodsOverride
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
class Builder extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public  function AppendTranslate($x, $y){}
	/**
	 * @param \System\Double|double $angle
	 * @return \System\Void|void
	 */
	public  function AppendRotate($angle){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public  function AppendScale($x, $y){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Void|void
	 */
	public  function AppendSkew($x, $y){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \System\Void|void
	 */
	public  function AppendMatrix($matrix){}
	/**
	 * @return \System\Void|void
	 */
	public  function AppendIdentity(){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $toAdd
	 * @return \System\Void|void
	 */
	public  function Append($toAdd){}
	/**
	 * @return \Avalonia\Media\Transformation\TransformOperations
	 */
	public  function Build(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\Builder $left
	 * @param \Avalonia\Media\Transformation\Builder $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\Builder $left
	 * @param \Avalonia\Media\Transformation\Builder $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses BuilderMethodsOverride::Equals_1 ($obj)
	 * @uses BuilderMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
