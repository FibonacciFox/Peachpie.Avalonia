<?php
namespace System\Threading;
final class ThreadInt64PersistentCounter extends \System\Object
{
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \System\Object|object $threadLocalCountObject
	 * @return \System\Void|void
	 */
	public static function Increment($threadLocalCountObject){}
	/**
	 * @return \System\Object|object
	 */
	public function CreateThreadLocalCountObject(){}
	/**
	 */
	public function __construct(){}
}