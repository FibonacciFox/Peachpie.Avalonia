<?php
namespace System\IO\Pipelines;
/**
 */
class PipeOptions extends \System\Object
{
	/**
	 * @var \System\IO\Pipelines\PipeOptions
	 * @property
	 */
	public readonly $Default;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UseSynchronizationContext;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $PauseWriterThreshold;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $ResumeWriterThreshold;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinimumSegmentSize;
	/**
	 * @var \System\IO\Pipelines\PipeScheduler
	 * @property
	 */
	public readonly $WriterScheduler;
	/**
	 * @var \System\IO\Pipelines\PipeScheduler
	 * @property
	 */
	public readonly $ReaderScheduler;
	/**
	 * @var \System\Buffers\MemoryPool_1[System\Byte]
	 * @property
	 */
	public readonly $Pool;
	/**
	 * @return \System\IO\Pipelines\PipeOptions
	 */
	public static function get_Default(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseSynchronizationContext(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_PauseWriterThreshold(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_ResumeWriterThreshold(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinimumSegmentSize(){}
	/**
	 * @return \System\IO\Pipelines\PipeScheduler
	 */
	public  function get_WriterScheduler(){}
	/**
	 * @return \System\IO\Pipelines\PipeScheduler
	 */
	public  function get_ReaderScheduler(){}
	/**
	 * @return \System\Buffers\MemoryPool_1
	 */
	public  function get_Pool(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDefaultSharedMemoryPool(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_InitialSegmentPoolSize(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxSegmentPoolSize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
