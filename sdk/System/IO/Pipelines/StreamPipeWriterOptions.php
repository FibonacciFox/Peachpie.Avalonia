<?php
namespace System\IO\Pipelines;
/**
 */
class StreamPipeWriterOptions extends \System\Object
{
	/**
	 * @var \System\IO\Pipelines\StreamPipeWriterOptions
	 * @field
	 */
	protected $s_default;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinimumBufferSize;
	/**
	 * @var \System\Buffers\MemoryPool_1[System\Byte]
	 * @property
	 */
	public readonly $Pool;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $LeaveOpen;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinimumBufferSize(){}
	/**
	 * @return \System\Buffers\MemoryPool_1
	 */
	public  function get_Pool(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_LeaveOpen(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
