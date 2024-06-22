<?php
namespace System\Threading;
final class ReaderWriterCount extends \System\Object
{

	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $lockID;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $readercount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $writercount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $upgradecount;
	/**
	 * @field
	 * @var \System\Threading\ReaderWriterCount
	 */
	public $next;
	/**
	 */
	public function __construct(){}
}