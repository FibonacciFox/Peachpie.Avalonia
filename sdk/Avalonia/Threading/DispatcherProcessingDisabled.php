<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherProcessingDisabledMethodsOverride
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
class DispatcherProcessingDisabled extends \System\ValueType implements 
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
	 * @param \Avalonia\Threading\DispatcherProcessingDisabled $left
	 * @param \Avalonia\Threading\DispatcherProcessingDisabled $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Threading\DispatcherProcessingDisabled $left
	 * @param \Avalonia\Threading\DispatcherProcessingDisabled $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses DispatcherProcessingDisabledMethodsOverride::Equals_1 ($obj)
	 * @uses DispatcherProcessingDisabledMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
