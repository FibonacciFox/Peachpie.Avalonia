<?php
namespace Avalonia\Utilities;
final class SynchronousCompletionAsyncResult_1 extends \System\ValueType implements
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	private static function ThrowNotInitialized(){}
	/**
	 * @return \T|object
	 */
	public function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1[T]
	 */
	public function GetAwaiter(){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $left [generic: T]
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $left [generic: T]
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \T|object $result
	 */
	public function __construct($result){}
}