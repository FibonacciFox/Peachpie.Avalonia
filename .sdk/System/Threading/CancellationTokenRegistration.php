<?php
namespace System\Threading;
final class CancellationTokenRegistration extends \System\ValueType implements
	\System\IEquatable_1,
	\System\IDisposable,
	\System\IAsyncDisposable
{

	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $Token;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function Unregister(){}
	/**
	 * @param \System\Threading\CancellationTokenRegistration $left
	 * @param \System\Threading\CancellationTokenRegistration $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\CancellationTokenRegistration $left
	 * @param \System\Threading\CancellationTokenRegistration $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
}