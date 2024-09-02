<?php
namespace System\Runtime\CompilerServices;
final class ContinuationWrapper extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Action
	 */
	protected $_continuation;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task
	 */
	protected $_innerTask;
	/**
	 * @return \System\Void|void
	 */
	protected function Invoke(){}
}