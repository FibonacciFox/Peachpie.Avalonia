<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DisposableMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function Create_1($dispose){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function Create_2($state, $dispose){}
}
/**
 */
class Disposable extends \System\Object
{
	/**
	 * @return \System\IDisposable
	 */
	public static function get_Empty(){}
	/**
	 * @uses DisposableMethodsOverride::Create_1 ($dispose)
	 * @uses DisposableMethodsOverride::Create_2 ($state, $dispose)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
