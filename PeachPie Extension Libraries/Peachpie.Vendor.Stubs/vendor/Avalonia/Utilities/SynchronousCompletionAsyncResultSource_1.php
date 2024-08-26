<?php
namespace Avalonia\Utilities;
class SynchronousCompletionAsyncResultSource_1 extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Utilities\SynchronousCompletionAsyncResult_1[T]
	 * @since readonly
	 */
	public $AsyncResult;
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	protected function OnCompleted($continuation){}
	/**
	 * @param \T|object $result
	 * @return \System\Void|void
	 */
	public function SetResult($result){}
	/**
	 * @param \T|object $result
	 * @return \System\Void|void
	 */
	public function TrySetResult($result){}
	/**
	 */
	public function __construct(){}
}