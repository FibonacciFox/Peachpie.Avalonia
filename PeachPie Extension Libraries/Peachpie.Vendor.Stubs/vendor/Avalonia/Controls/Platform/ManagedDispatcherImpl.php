<?php
namespace Avalonia\Controls\Platform;
class ManagedDispatcherImpl extends \System\Object implements
	\Avalonia\Threading\IControlledDispatcherImpl,
	\Avalonia\Threading\IDispatcherImplWithPendingInput,
	\Avalonia\Threading\IDispatcherImpl
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CurrentThreadIsLoopThread;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Now;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanQueryPendingInput;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasPendingInput;
	/**
	 * @return \System\Void|void
	 */
	public function Signal(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_Timer($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_Timer($value){}
	/**
	 * @param \System\Nullable_1 $dueTimeInMs [generic: System\Int64]
	 * @return \System\Void|void
	 */
	public function UpdateTimer($dueTimeInMs){}
	/**
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Void|void
	 */
	public function RunLoop($token){}
	/**
	 * @param \Avalonia\Controls\Platform\ManagedDispatcherImpl+IManagedDispatcherInputProvider $inputProvider
	 */
	public function __construct($inputProvider){}
}