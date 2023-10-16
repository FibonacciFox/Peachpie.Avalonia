<?php
namespace System\IO\Pipelines;
/**
 */
class ReadResult extends \System\ValueType
{
	/**
	 * @var \System\Buffers\ReadOnlySequence_1[System\Byte]
	 * @field
	 */
	protected readonly $_resultBuffer;
	/**
	 * @var \System\IO\Pipelines\ResultFlags
	 * @field
	 */
	protected readonly $_resultFlags;
	/**
	 * @var \System\Buffers\ReadOnlySequence_1[System\Byte]
	 * @property
	 */
	public readonly $Buffer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCanceled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Buffers\ReadOnlySequence_1
	 */
	public  function get_Buffer(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCanceled(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
}
