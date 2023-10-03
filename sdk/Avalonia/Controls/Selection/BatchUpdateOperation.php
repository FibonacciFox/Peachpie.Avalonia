<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BatchUpdateOperationMethodsOverride
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
class BatchUpdateOperation extends \System\ValueType implements 
	\System\IDisposable,
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Controls\Selection\Operation
	 */
	protected  function get_Operation(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\Selection\BatchUpdateOperation $left
	 * @param \Avalonia\Controls\Selection\BatchUpdateOperation $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\Selection\BatchUpdateOperation $left
	 * @param \Avalonia\Controls\Selection\BatchUpdateOperation $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses BatchUpdateOperationMethodsOverride::Equals_1 ($obj)
	 * @uses BatchUpdateOperationMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
