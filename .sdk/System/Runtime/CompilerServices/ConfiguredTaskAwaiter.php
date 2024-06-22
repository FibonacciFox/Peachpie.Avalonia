<?php
namespace System\Runtime\CompilerServices;
final class ConfiguredTaskAwaiter extends \System\ValueType implements
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\IConfiguredTaskAwaiter
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation){}
	/**
	 * @return \TResult
	 */
	public function GetResult(){}
}