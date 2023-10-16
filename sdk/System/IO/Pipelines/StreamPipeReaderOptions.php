<?php
namespace System\IO\Pipelines;
/**
 */
class StreamPipeReaderOptions extends \System\Object
{
	/**
	 * @var \System\IO\Pipelines\StreamPipeReaderOptions
	 * @field
	 */
	protected readonly $s_default;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $DefaultMaxBufferSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BufferSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinimumReadSize;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UseZeroByteReads;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BufferSize(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxBufferSize(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinimumReadSize(){}
	/**
	 * @return \System\Buffers\MemoryPool_1
	 */
	public  function get_Pool(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_LeaveOpen(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseZeroByteReads(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDefaultSharedMemoryPool(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
