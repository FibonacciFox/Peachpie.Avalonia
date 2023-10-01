<?php
namespace Avalonia\Media\Transformation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TransformOperationMethodsOverride
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
class TransformOperation extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIdentity(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Bake(){}
	/**
	 * @return \Avalonia\Media\Transformation\TransformOperation
	 */
	public static function get_Identity(){}
	/**
	 * @param \System\Nullable_1 $from
	 * @param \System\Nullable_1 $to
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Media\Transformation\TransformOperation& $result
	 * @return \System\Boolean
	 */
	public static function TryInterpolate($from, $to, $progress, $result){}
	/**
	 * @param \System\Nullable_1& $operation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsOperationIdentity($operation){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $left
	 * @param \Avalonia\Media\Transformation\TransformOperation $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Transformation\TransformOperation $left
	 * @param \Avalonia\Media\Transformation\TransformOperation $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TransformOperationMethodsOverride::Equals_1 ($obj)
	 * @uses TransformOperationMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
