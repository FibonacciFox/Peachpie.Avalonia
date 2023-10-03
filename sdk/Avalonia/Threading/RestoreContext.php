<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RestoreContextMethodsOverride
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
class RestoreContext extends \System\ValueType implements 
	\System\IDisposable,
	\System\IEquatable_1
{
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
	 * @param \Avalonia\Threading\RestoreContext $left
	 * @param \Avalonia\Threading\RestoreContext $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Threading\RestoreContext $left
	 * @param \Avalonia\Threading\RestoreContext $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses RestoreContextMethodsOverride::Equals_1 ($obj)
	 * @uses RestoreContextMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
