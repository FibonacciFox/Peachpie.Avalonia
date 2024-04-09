<?php
namespace System\Runtime;
final class Canceler extends \System\Object
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCancelCompleted;
	/**
	 * @return \System\Void|void
	 */
	public function Cancel(){}
	/**
	 * @param \System\Threading\Thread $thread
	 */
	public function __construct($thread){}
}