<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UpdateResultMethodsOverride
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
class UpdateResult extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Bounds(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Bounds($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InvalidatedOld(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_InvalidatedOld($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InvalidatedNew(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_InvalidatedNew($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\UpdateResult $left
	 * @param \Avalonia\Rendering\Composition\Server\UpdateResult $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\UpdateResult $left
	 * @param \Avalonia\Rendering\Composition\Server\UpdateResult $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses UpdateResultMethodsOverride::Equals_1 ($obj)
	 * @uses UpdateResultMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Nullable_1& $Bounds
	 * @param \System\Boolean& $InvalidatedOld
	 * @param \System\Boolean& $InvalidatedNew
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Bounds, $InvalidatedOld, $InvalidatedNew){}
}
