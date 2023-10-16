<?php
namespace System\Threading;
/**
 */
class ReaderWriterCount extends \System\Object
{
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $lockID;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $readercount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $writercount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $upgradecount;
	/**
	 * @var \System\Threading\ReaderWriterCount
	 * @field
	 */
	public $next;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
