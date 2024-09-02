<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $newBits
	 * @param \System\Int32|int $illegalBits
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AtomicStateUpdate_1 ($newBits, $illegalBits){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $newBits
	 * @param \System\Int32|int $illegalBits
	 * @param \System\Int32& $oldFlags
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function AtomicStateUpdate_2 ($newBits, $illegalBits, $oldFlags){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_2 ($scheduler){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunSynchronously_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunSynchronously_2 ($scheduler){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @param \System\Object|object $exceptionObject
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function AddException_1 ($exceptionObject){}
	/**
	 * @deprecated
	 * @param \System\Object|object $exceptionObject
	 * @param \System\Boolean|bool $representsCancellation
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function AddException_2 ($exceptionObject, $representsCancellation){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_1 (){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_2 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_3 ($timeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Wait_4 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_5 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Wait_6 ($millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WaitAsync_1 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WaitAsync_2 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function WaitAsync_3 ($timeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function WaitAsync_4 ($millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RecordInternalCancellationRequest_1 (){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $tokenToRecord
	 * @param \System\Object|object $cancellationException
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RecordInternalCancellationRequest_2 ($tokenToRecord, $cancellationException){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $tokenToRecord
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function TrySetCanceled_1 ($tokenToRecord){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $tokenToRecord
	 * @param \System\Object|object $cancellationException
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function TrySetCanceled_2 ($tokenToRecord, $cancellationException){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_1 ($continuationAction){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_2 ($continuationAction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_3 ($continuationAction, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_4 ($continuationAction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_5 ($continuationAction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Action_1 $continuationAction [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function ContinueWith_6 ($continuationAction, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_7 ($continuationAction, $state){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_8 ($continuationAction, $state, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_9 ($continuationAction, $state, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_10 ($continuationAction, $state, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ContinueWith_11 ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Action_2 $continuationAction [generic: System\Threading\Tasks\Task,System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function ContinueWith_12 ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_13 ($continuationFunction){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_14 ($continuationFunction, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_15 ($continuationFunction, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_16 ($continuationFunction, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_17 ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $continuationFunction [generic: System\Threading\Tasks\Task,TResult]
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]private function ContinueWith_18 ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_19 ($continuationFunction, $state){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_20 ($continuationFunction, $state, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_21 ($continuationFunction, $state, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_22 ($continuationFunction, $state, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ContinueWith_23 ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $continuationFunction [generic: System\Threading\Tasks\Task,System\Object,TResult]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]private function ContinueWith_24 ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task ...$tasks
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WaitAll_1 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_2 ($tasks, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_3 ($tasks, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WaitAll_4 ($tasks, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function WaitAll_5 ($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task ...$tasks
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_1 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\TimeSpan $timeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_2 ($tasks, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_3 ($tasks, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_4 ($tasks, $millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function WaitAny_5 ($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function FromException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function FromException_2 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function FromCanceled_1 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function FromCanceled_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\OperationCanceledException $exception
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected static function FromCanceled_3 ($exception){}
	/**
	 * @deprecated
	 * @param \System\OperationCanceledException $exception
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected static function FromCanceled_4 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Run_1 ($action){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Run_2 ($action, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function Run_3 ($function){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function Run_4 ($function, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Run_5 ($function){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: System\Threading\Tasks\Task]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Run_6 ($function, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: System\Threading\Tasks\Task_1[TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function Run_7 ($function){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $function [generic: System\Threading\Tasks\Task_1[TResult]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function Run_8 ($function, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $delay
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Delay_1 ($delay){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $delay
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Delay_2 ($delay, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsDelay
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Delay_3 ($millisecondsDelay){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsDelay
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function Delay_4 ($millisecondsDelay, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $millisecondsDelay
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private static function Delay_5 ($millisecondsDelay, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $tasks [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WhenAll_1 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task ...$tasks
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public static function WhenAll_2 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $tasks [generic: System\Threading\Tasks\Task_1[TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAll_3 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 ...$tasks [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAll_4 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $tasks
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private static function InternalWhenAll_1 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $tasks [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]private static function InternalWhenAll_2 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task ...$tasks
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_1 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $task1
	 * @param \System\Threading\Tasks\Task $task2
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_2 ($task1, $task2){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $tasks [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_3 ($tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 ...$tasks [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_4 (...$tasks){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $task1 [generic: TResult]
	 * @param \System\Threading\Tasks\Task_1 $task2 [generic: TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_5 ($task1, $task2){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $tasks [generic: System\Threading\Tasks\Task_1[TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public static function WhenAny_6 ($tasks){}
	/**
	 * @param \System\Action $action
	 */
	#[MethodOverride]public function __construct_1 ($action){}
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	#[MethodOverride]public function __construct_2 ($action, $cancellationToken){}
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_3 ($action, $creationOptions){}
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_4 ($action, $cancellationToken, $creationOptions){}
	/**
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 */
	#[MethodOverride]public function __construct_5 ($action, $state){}
	/**
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	#[MethodOverride]public function __construct_6 ($action, $state, $cancellationToken){}
	/**
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_7 ($action, $state, $creationOptions){}
	/**
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 */
	#[MethodOverride]public function __construct_8 ($action, $state, $cancellationToken, $creationOptions){}
}
class Task extends \System\Object implements
	\System\IAsyncResult,
	\System\IDisposable
{
	use TaskOverride;
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
	 * @field
	 * @var \System\Int32|int
	 */
	protected static $s_taskIdCounter;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected static $s_asyncDebuggingEnabled;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[System\Threading\Tasks\VoidTaskResult]
	 */
	protected static $s_cachedCompleted;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Task
	 */
	protected static $t_currentTask;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Int32]
	 * @since readonly
	 */
	public $CurrentId;
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
	 * @var \System\Threading\Tasks\TaskFactory
	 * @since readonly
	 */
	public $Factory;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $CompletedTask;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFaulted;
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Boolean|bool
	 */
	protected static function AddToActiveTasks($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function RemoveFromActiveTasks($task){}
	/**
	 * @param \System\Delegate $action
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Void|void
	 */
	protected function TaskConstructorCore($action, $state, $cancellationToken, $creationOptions, $internalOptions, $scheduler){}
	private function AssignCancellationToken($cancellationToken, $antecedent, $continuation){}
	/**
	 * @param \System\Int32|int $flags
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	protected static function OptionsMethod($flags){}
	/**
	 * @uses TaskOverride::AtomicStateUpdate_1 <br>protected , args: ($newBits, $illegalBits)<br>
	 * @uses TaskOverride::AtomicStateUpdate_2 <br>protected , args: ($newBits, $illegalBits, $oldFlags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function AtomicStateUpdate (\override ...$args){}
	private function AtomicStateUpdateSlow($newBits, $illegalBits){}
	/**
	 * @param \System\Boolean|bool $enabled
	 * @return \System\Void|void
	 */
	protected function SetNotificationForWaitCompletion($enabled){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function NotifyDebuggerOfWaitCompletionIfNecessary(){}
	/**
	 * @param \System\Threading\Tasks\Task $tasks
	 * @return \System\Boolean|bool
	 */
	protected static function AnyTaskRequiresNotifyDebuggerOfWaitCompletion($tasks){}
	private function NotifyDebuggerOfWaitCompletion(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function MarkStarted(){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $ts
	 * @return \System\Void|void
	 */
	protected function FireTaskScheduledIfNeeded($ts){}
	/**
	 * @return \System\Void|void
	 */
	protected function AddNewChild(){}
	/**
	 * @return \System\Void|void
	 */
	protected function DisregardChild(){}
	/**
	 * @uses TaskOverride::Start_1 <br>public , args: ()<br>
	 * @uses TaskOverride::Start_2 <br>public , args: ($scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Start (\override ...$args){}
	/**
	 * @uses TaskOverride::RunSynchronously_1 <br>public , args: ()<br>
	 * @uses TaskOverride::RunSynchronously_2 <br>public , args: ($scheduler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunSynchronously (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Boolean|bool $waitForCompletion
	 * @return \System\Void|void
	 */
	protected function InternalRunSynchronously($scheduler, $waitForCompletion){}
	/**
	 * @param \System\Threading\Tasks\Task $creatingTask
	 * @param \System\Delegate $action
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\Tasks\TaskCreationOptions $options
	 * @param \System\Threading\Tasks\InternalTaskOptions $internalOptions
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function InternalStartNew($creatingTask, $action, $state, $cancellationToken, $scheduler, $options, $internalOptions){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function NewId(){}
	/**
	 * @param \System\Threading\Tasks\TaskCreationOptions $creationOptions
	 * @return \System\Threading\Tasks\Task
	 */
	protected static function InternalCurrentIfAttached($creationOptions){}
	/**
	 * @return \System\Threading\Tasks\Task+ContingentProperties
	 */
	protected function EnsureContingentPropertiesInitialized(){}
	/**
	 * @return \System\Threading\Tasks\Task+ContingentProperties
	 */
	protected function EnsureContingentPropertiesInitializedUnsafe(){}
	private static function IsCompletedMethod($flags){}
	/**
	 * @return \System\Void|void
	 */
	protected function SpinUntilCompleted(){}
	private function get_AsyncWaitHandle(){}
	private function get_CompletedSynchronously(){}
	/**
	 * @uses TaskOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses TaskOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @param \System\Boolean|bool $needsProtection
	 * @return \System\Void|void
	 */
	protected function ScheduleAndStart($needsProtection){}
	/**
	 * @uses TaskOverride::AddException_1 <br>protected , args: ($exceptionObject)<br>
	 * @uses TaskOverride::AddException_2 <br>protected , args: ($exceptionObject, $representsCancellation)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function AddException (\override ...$args){}
	private function GetExceptions($includeTaskCanceledExceptions){}
	/**
	 * @return \System\Collections\Generic\List_1[System\Runtime\ExceptionServices\ExceptionDispatchInfo]
	 */
	protected function GetExceptionDispatchInfos(){}
	/**
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	protected function GetCancellationExceptionDispatchInfo(){}
	/**
	 * @return \System\Void|void
	 */
	protected function MarkExceptionsAsHandled(){}
	/**
	 * @param \System\Boolean|bool $includeTaskCanceledExceptions
	 * @return \System\Void|void
	 */
	protected function ThrowIfExceptional($includeTaskCanceledExceptions){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\Threading\SynchronizationContext $targetContext
	 * @return \System\Void|void
	 */
	protected static function ThrowAsync($exception, $targetContext){}
	/**
	 * @return \System\Void|void
	 */
	protected function UpdateExceptionObservedStatus(){}
	/**
	 * @param \System\Boolean|bool $userDelegateExecute
	 * @return \System\Void|void
	 */
	protected function Finish($userDelegateExecute){}
	private function FinishSlow($userDelegateExecute){}
	private function FinishStageTwo(){}
	/**
	 * @return \System\Void|void
	 */
	protected function FinishStageThree(){}
	/**
	 * @return \System\Void|void
	 */
	protected function NotifyParentIfPotentiallyAttachedTask(){}
	/**
	 * @param \System\Threading\Tasks\Task $childTask
	 * @return \System\Void|void
	 */
	protected function ProcessChildCompletion($childTask){}
	/**
	 * @param \System\Threading\Tasks\Task+ContingentProperties $props
	 * @return \System\Void|void
	 */
	protected function AddExceptionsFromChildren($props){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function ExecuteEntry(){}
	/**
	 * @param \System\Threading\Thread $threadPoolThread
	 * @return \System\Void|void
	 */
	protected function ExecuteFromThreadPool($threadPoolThread){}
	/**
	 * @param \System\Threading\Thread $threadPoolThread
	 * @return \System\Void|void
	 */
	protected function ExecuteEntryUnsafe($threadPoolThread){}
	/**
	 * @return \System\Void|void
	 */
	protected function ExecuteEntryCancellationRequestedOrCanceled(){}
	private function ExecuteWithThreadLocal($currentTaskSlot, $threadPoolThread){}
	/**
	 * @return \System\Void|void
	 */
	protected function InnerInvoke(){}
	private function HandleException($unhandledException){}
	/**
	 * @return \System\Runtime\CompilerServices\TaskAwaiter
	 */
	public function GetAwaiter(){}
	/**
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredTaskAwaitable
	 */
	public function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @param \System\Action $continuationAction
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @param \System\Boolean|bool $flowExecutionContext
	 * @return \System\Void|void
	 */
	protected function SetContinuationForAwait($continuationAction, $continueOnCapturedContext, $flowExecutionContext){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $stateMachineBox
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Void|void
	 */
	protected function UnsafeSetContinuationForAwait($stateMachineBox, $continueOnCapturedContext){}
	/**
	 * @return \System\Runtime\CompilerServices\YieldAwaitable
	 */
	public static function Yield(){}
	/**
	 * @uses TaskOverride::Wait_1 <br>public , args: ()<br>
	 * @uses TaskOverride::Wait_2 <br>public , args: ($timeout)<br>
	 * @uses TaskOverride::Wait_3 <br>public , args: ($timeout, $cancellationToken)<br>
	 * @uses TaskOverride::Wait_4 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskOverride::Wait_5 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses TaskOverride::Wait_6 <br>public , args: ($millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Wait (\override ...$args){}
	/**
	 * @uses TaskOverride::WaitAsync_1 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskOverride::WaitAsync_2 <br>public , args: ($timeout)<br>
	 * @uses TaskOverride::WaitAsync_3 <br>public , args: ($timeout, $cancellationToken)<br>
	 * @uses TaskOverride::WaitAsync_4 <br>private , args: ($millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAsync (\override ...$args){}
	private function WrappedTryRunInline(){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Boolean|bool
	 */
	protected function InternalWait($millisecondsTimeout, $cancellationToken){}
	private function InternalWaitCore($millisecondsTimeout, $cancellationToken){}
	private function SpinThenBlockingWait($millisecondsTimeout, $cancellationToken){}
	private function SpinWait($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	protected function InternalCancel(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InternalCancelContinueWithInitialState(){}
	/**
	 * @uses TaskOverride::RecordInternalCancellationRequest_1 <br>protected , args: ()<br>
	 * @uses TaskOverride::RecordInternalCancellationRequest_2 <br>protected , args: ($tokenToRecord, $cancellationException)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function RecordInternalCancellationRequest (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function CancellationCleanupLogic(){}
	private function SetCancellationAcknowledged(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function TrySetResult(){}
	/**
	 * @param \System\Object|object $exceptionObject
	 * @return \System\Boolean|bool
	 */
	protected function TrySetException($exceptionObject){}
	/**
	 * @uses TaskOverride::TrySetCanceled_1 <br>protected , args: ($tokenToRecord)<br>
	 * @uses TaskOverride::TrySetCanceled_2 <br>protected , args: ($tokenToRecord, $cancellationException)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function TrySetCanceled (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function FinishContinuations(){}
	private function RunContinuations($continuationObject){}
	private function RunOrQueueCompletionAction($completionAction, $allowInlining){}
	private static function LogFinishCompletionNotification(){}
	/**
	 * @uses TaskOverride::ContinueWith_1 <br>public , args: ($continuationAction)<br>
	 * @uses TaskOverride::ContinueWith_2 <br>public , args: ($continuationAction, $cancellationToken)<br>
	 * @uses TaskOverride::ContinueWith_3 <br>public , args: ($continuationAction, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_4 <br>public , args: ($continuationAction, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_5 <br>public , args: ($continuationAction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_6 <br>private , args: ($continuationAction, $scheduler, $cancellationToken, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_7 <br>public , args: ($continuationAction, $state)<br>
	 * @uses TaskOverride::ContinueWith_8 <br>public , args: ($continuationAction, $state, $cancellationToken)<br>
	 * @uses TaskOverride::ContinueWith_9 <br>public , args: ($continuationAction, $state, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_10 <br>public , args: ($continuationAction, $state, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_11 <br>public , args: ($continuationAction, $state, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_12 <br>private , args: ($continuationAction, $state, $scheduler, $cancellationToken, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_13 <br>public , args: ($continuationFunction)<br>
	 * @uses TaskOverride::ContinueWith_14 <br>public , args: ($continuationFunction, $cancellationToken)<br>
	 * @uses TaskOverride::ContinueWith_15 <br>public , args: ($continuationFunction, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_16 <br>public , args: ($continuationFunction, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_17 <br>public , args: ($continuationFunction, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_18 <br>private , args: ($continuationFunction, $scheduler, $cancellationToken, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_19 <br>public , args: ($continuationFunction, $state)<br>
	 * @uses TaskOverride::ContinueWith_20 <br>public , args: ($continuationFunction, $state, $cancellationToken)<br>
	 * @uses TaskOverride::ContinueWith_21 <br>public , args: ($continuationFunction, $state, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_22 <br>public , args: ($continuationFunction, $state, $continuationOptions)<br>
	 * @uses TaskOverride::ContinueWith_23 <br>public , args: ($continuationFunction, $state, $cancellationToken, $continuationOptions, $scheduler)<br>
	 * @uses TaskOverride::ContinueWith_24 <br>private , args: ($continuationFunction, $state, $scheduler, $cancellationToken, $continuationOptions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ContinueWith (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\TaskContinuationOptions $continuationOptions
	 * @param \System\Threading\Tasks\TaskCreationOptions& &$creationOptions
	 * @param \System\Threading\Tasks\InternalTaskOptions& &$internalOptions
	 * @return \System\Void|void
	 */
	protected static function CreationOptionsFromContinuationOptions($continuationOptions, &$creationOptions, &$internalOptions){}
	/**
	 * @param \System\Threading\Tasks\Task $continuationTask
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\TaskContinuationOptions $options
	 * @return \System\Void|void
	 */
	protected function ContinueWithCore($continuationTask, $scheduler, $cancellationToken, $options){}
	/**
	 * @param \System\Threading\Tasks\ITaskCompletionAction $action
	 * @param \System\Boolean|bool $addBeforeOthers
	 * @return \System\Void|void
	 */
	protected function AddCompletionAction($action, $addBeforeOthers){}
	private function AddTaskContinuationComplex($tc, $addBeforeOthers){}
	private function AddTaskContinuation($tc, $addBeforeOthers){}
	/**
	 * @param \System\Object|object $continuationObject
	 * @return \System\Void|void
	 */
	protected function RemoveContinuation($continuationObject){}
	/**
	 * @uses TaskOverride::WaitAll_1 <br>public , args: (...$tasks)<br>
	 * @uses TaskOverride::WaitAll_2 <br>public , args: ($tasks, $timeout)<br>
	 * @uses TaskOverride::WaitAll_3 <br>public , args: ($tasks, $millisecondsTimeout)<br>
	 * @uses TaskOverride::WaitAll_4 <br>public , args: ($tasks, $cancellationToken)<br>
	 * @uses TaskOverride::WaitAll_5 <br>public , args: ($tasks, $millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAll (\override ...$args){}
	private static function WaitAllCore($tasks, $millisecondsTimeout, $cancellationToken){}
	private static function AddToList($item, $list, $initSize){}
	private static function WaitAllBlockingCore($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \System\Collections\Generic\List_1 $exceptions [generic: System\Exception]
	 * @param \System\Threading\Tasks\Task $t
	 * @return \System\Void|void
	 */
	protected static function AddExceptionsForCompletedTask($exceptions, $t){}
	/**
	 * @uses TaskOverride::WaitAny_1 <br>public , args: (...$tasks)<br>
	 * @uses TaskOverride::WaitAny_2 <br>public , args: ($tasks, $timeout)<br>
	 * @uses TaskOverride::WaitAny_3 <br>public , args: ($tasks, $cancellationToken)<br>
	 * @uses TaskOverride::WaitAny_4 <br>public , args: ($tasks, $millisecondsTimeout)<br>
	 * @uses TaskOverride::WaitAny_5 <br>public , args: ($tasks, $millisecondsTimeout, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function WaitAny (\override ...$args){}
	private static function WaitAnyCore($tasks, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @param \TResult $result
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	public static function FromResult($result){}
	/**
	 * @uses TaskOverride::FromException_1 <br>public , args: ($exception)<br>
	 * @uses TaskOverride::FromException_2 <br>public , args: ($exception)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromException (\override ...$args){}
	/**
	 * @uses TaskOverride::FromCanceled_1 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskOverride::FromCanceled_2 <br>public , args: ($cancellationToken)<br>
	 * @uses TaskOverride::FromCanceled_3 <br>protected , args: ($exception)<br>
	 * @uses TaskOverride::FromCanceled_4 <br>protected , args: ($exception)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromCanceled (\override ...$args){}
	/**
	 * @uses TaskOverride::Run_1 <br>public , args: ($action)<br>
	 * @uses TaskOverride::Run_2 <br>public , args: ($action, $cancellationToken)<br>
	 * @uses TaskOverride::Run_3 <br>public , args: ($function)<br>
	 * @uses TaskOverride::Run_4 <br>public , args: ($function, $cancellationToken)<br>
	 * @uses TaskOverride::Run_5 <br>public , args: ($function)<br>
	 * @uses TaskOverride::Run_6 <br>public , args: ($function, $cancellationToken)<br>
	 * @uses TaskOverride::Run_7 <br>public , args: ($function)<br>
	 * @uses TaskOverride::Run_8 <br>public , args: ($function, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function Run (\override ...$args){}
	/**
	 * @uses TaskOverride::Delay_1 <br>public , args: ($delay)<br>
	 * @uses TaskOverride::Delay_2 <br>public , args: ($delay, $cancellationToken)<br>
	 * @uses TaskOverride::Delay_3 <br>public , args: ($millisecondsDelay)<br>
	 * @uses TaskOverride::Delay_4 <br>public , args: ($millisecondsDelay, $cancellationToken)<br>
	 * @uses TaskOverride::Delay_5 <br>private , args: ($millisecondsDelay, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function Delay (\override ...$args){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @param \System\ExceptionArgument $argument
	 * @return \System\UInt32
	 */
	protected static function ValidateTimeout($timeout, $argument){}
	/**
	 * @uses TaskOverride::WhenAll_1 <br>public , args: ($tasks)<br>
	 * @uses TaskOverride::WhenAll_2 <br>public , args: (...$tasks)<br>
	 * @uses TaskOverride::WhenAll_3 <br>public , args: ($tasks)<br>
	 * @uses TaskOverride::WhenAll_4 <br>public , args: (...$tasks)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function WhenAll (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TaskOverride::InternalWhenAll_1 <br>private , args: ($tasks)<br>
	 * @uses TaskOverride::InternalWhenAll_2 <br>private , args: ($tasks)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePrivate]function InternalWhenAll (\override ...$args){}
	/**
	 * @uses TaskOverride::WhenAny_1 <br>public , args: (...$tasks)<br>
	 * @uses TaskOverride::WhenAny_2 <br>public , args: ($task1, $task2)<br>
	 * @uses TaskOverride::WhenAny_3 <br>public , args: ($tasks)<br>
	 * @uses TaskOverride::WhenAny_4 <br>public , args: (...$tasks)<br>
	 * @uses TaskOverride::WhenAny_5 <br>public , args: ($task1, $task2)<br>
	 * @uses TaskOverride::WhenAny_6 <br>public , args: ($tasks)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function WhenAny (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\Task $outerTask
	 * @param \System\Boolean|bool $lookForOce
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static function CreateUnwrapPromise($outerTask, $lookForOce){}
	/**
	 * @return \System\Delegate[]
	 */
	protected function GetDelegateContinuationsForDebugger(){}
	private static function GetDelegatesFromContinuationObject($continuationObject){}
	private static function GetActiveTaskFromId($taskId){}
	/**
	 * @uses TaskOverride::__construct_1 <br>public , args: ($action)<br>
	 * @uses TaskOverride::__construct_2 <br>public , args: ($action, $cancellationToken)<br>
	 * @uses TaskOverride::__construct_3 <br>public , args: ($action, $creationOptions)<br>
	 * @uses TaskOverride::__construct_4 <br>public , args: ($action, $cancellationToken, $creationOptions)<br>
	 * @uses TaskOverride::__construct_5 <br>public , args: ($action, $state)<br>
	 * @uses TaskOverride::__construct_6 <br>public , args: ($action, $state, $cancellationToken)<br>
	 * @uses TaskOverride::__construct_7 <br>public , args: ($action, $state, $creationOptions)<br>
	 * @uses TaskOverride::__construct_8 <br>public , args: ($action, $state, $cancellationToken, $creationOptions)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}