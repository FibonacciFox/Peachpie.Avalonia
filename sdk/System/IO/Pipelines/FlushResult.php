<?php
namespace System\IO\Pipelines;
/**
 */
class FlushResult extends \System\ValueType
{
	/**
	 * @var \System\IO\Pipelines\ResultFlags
	 * @field
	 */
	protected $_resultFlags;
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
	 * @return \System\Boolean
	 */
	public  function get_IsCanceled(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
}
