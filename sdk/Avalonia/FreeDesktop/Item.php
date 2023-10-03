<?php
namespace Avalonia\FreeDesktop;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ItemMethodsOverride
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
class Item extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Type
	 */
	protected  function get_EqualityContract(){}
	/**
	 * @return \System\Func_1
	 */
	public  function get_Callback(){}
	/**
	 * @param \System\Func_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Callback($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean
	 */
	protected  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\FreeDesktop\Item $left
	 * @param \Avalonia\FreeDesktop\Item $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\FreeDesktop\Item $left
	 * @param \Avalonia\FreeDesktop\Item $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses ItemMethodsOverride::Equals_1 ($obj)
	 * @uses ItemMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Func_1& $Callback
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Callback){}
}
