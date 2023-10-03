<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BatchStreamSegment_1MethodsOverride
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
 * @deprecated this element should not be used by you because it will break your program
 */
class BatchStreamSegment_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\TData
	 */
	public  function get_Data(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TData $value
	 * @return \System\Void|void
	 */
	public  function set_Data($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ElementCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ElementCount($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1 $left
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1 $left
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamSegment_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses BatchStreamSegment_1MethodsOverride::Equals_1 ($obj)
	 * @uses BatchStreamSegment_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
