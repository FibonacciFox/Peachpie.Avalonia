<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CancellationTokenRegistrationMethodsOverride
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
class CancellationTokenRegistration extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\CancellationToken
	 * @property
	 */
	public readonly $Token;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @return \System\Threading\CancellationToken
	 */
	public  function get_Token(){}
	/**
	 * @return \System\Boolean
	 */
	public  function Unregister(){}
	/**
	 * @param \System\Threading\CancellationTokenRegistration $left
	 * @param \System\Threading\CancellationTokenRegistration $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\CancellationTokenRegistration $left
	 * @param \System\Threading\CancellationTokenRegistration $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses CancellationTokenRegistrationMethodsOverride::Equals_1 ($obj)
	 * @uses CancellationTokenRegistrationMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
