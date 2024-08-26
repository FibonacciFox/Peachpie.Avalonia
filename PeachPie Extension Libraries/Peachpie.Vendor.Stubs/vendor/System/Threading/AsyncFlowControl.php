<?php
namespace System\Threading;
final class AsyncFlowControl extends \System\ValueType implements
	\System\IEquatable_1,
	\System\IDisposable
{

	/**
	 * @param \System\Threading\Thread $currentThread
	 * @return \System\Void|void
	 */
	protected function Initialize($currentThread){}
	/**
	 * @return \System\Void|void
	 */
	public function Undo(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Threading\AsyncFlowControl $a
	 * @param \System\Threading\AsyncFlowControl $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Threading\AsyncFlowControl $a
	 * @param \System\Threading\AsyncFlowControl $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
}