<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskCompletionSourceOverride {
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $exceptions [generic: System\Exception]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetException_2 ($exceptions){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TrySetException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $exceptions [generic: System\Exception]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TrySetException_2 ($exceptions){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCanceled_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCanceled_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TrySetCanceled_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TrySetCanceled_2 ($cancellationToken){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_2 ($creationOptions){}
	/**
	 * @param \System\Object|object $state
	 */
	#[MethodOverride]public function __construct_3 ($state){}
	/**
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_4 ($state, $creationOptions){}
}
class TaskCompletionSource extends \System\Object
{
	use TaskCompletionSourceOverride;

	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Task;
	/**
	 * @uses TaskCompletionSourceOverride::SetException_1 <br>public , args: ($exception)<br>
	 * @uses TaskCompletionSourceOverride::SetException_2 <br>public , args: ($exceptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetException (\override ...$args){}
	/**
	 * @uses TaskCompletionSourceOverride::TrySetException_1 <br>public , args: ($exception)<br>
	 * @uses TaskCompletionSourceOverride::TrySetException_2 <br>public , args: ($exceptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TrySetException (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function SetResult(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function TrySetResult(){}
	/**
	 * @uses TaskCompletionSourceOverride::SetCanceled_1 <br>public , args: ()<br>
	 * @uses TaskCompletionSourceOverride::SetCanceled_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCanceled (\override ...$args){}
	/**
	 * @uses TaskCompletionSourceOverride::TrySetCanceled_1 <br>public , args: ()<br>
	 * @uses TaskCompletionSourceOverride::TrySetCanceled_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TrySetCanceled (\override ...$args){}
	/**
	 * @uses TaskCompletionSourceOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TaskCompletionSourceOverride::__construct_2 <br>public , args: ($creationOptions)<br>
	 * @uses TaskCompletionSourceOverride::__construct_3 <br>public , args: ($state)<br>
	 * @uses TaskCompletionSourceOverride::__construct_4 <br>public , args: ($state, $creationOptions)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}