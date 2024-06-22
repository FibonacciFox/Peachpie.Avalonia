<?php
namespace System\IO;
final class ReadWriteTask extends \System\Threading\Tasks\Task_1 implements
	\System\IAsyncResult,
	\System\IDisposable,
	\System\Threading\Tasks\ITaskCompletionAction
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $_isRead;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $_apm;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_endCalled;
	/**
	 * @field
	 * @var \System\IO\Stream
	 */
	protected $_stream;
	/**
	 * @field
	 * @var \System\Byte[]
	 */
	protected $_buffer;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $_offset;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $_count;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_result;
	/**
	 * @field
	 * @var \System\Delegate
	 */
	protected $m_action;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $m_stateObject;
	/**
	 * @field
	 * @var \System\Threading\Tasks\TaskScheduler
	 */
	protected $m_taskScheduler;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_stateFlags;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Task+ContingentProperties
	 */
	protected $m_contingentProperties;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Result;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\AggregateException
	 * @since readonly
	 */
	public $Exception;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskStatus
	 * @since readonly
	 */
	public $Status;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCanceled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompletedSuccessfully;
	/**
	 * @property
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @since readonly
	 */
	public $CreationOptions;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $AsyncState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFaulted;
	/**
	 * @return \System\Void|void
	 */
	protected function ClearBeginState(){}
	private static function InvokeAsyncCallback($completedTask){}
	private function Invoke($completingTask){}
	private function get_InvokeMayRunArbitraryCode(){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
	/**
	 * @param \System\Boolean|bool $isRead
	 * @param \System\Boolean|bool $apm
	 * @param \System\Func_2 $function [generic: System\Object,System\Int32]
	 * @param \System\Object|object $state
	 * @param \System\IO\Stream $stream
	 * @param \System\Byte $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 */
	public function __construct($isRead, $apm, $function, $state, $stream, $buffer, $offset, $count, $callback){}
}