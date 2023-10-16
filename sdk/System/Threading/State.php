<?php
namespace System\Threading;
/**
 */
class State extends \System\Object implements 
	\System\Threading\Tasks\Sources\IValueTaskSource_1
{
	/**
	 * @param \System\Threading\PeriodicTimer $owner
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function WaitForNextTickAsync($owner, $cancellationToken){}
	/**
	 * @param \System\Boolean $stopping
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public  function Signal($stopping, $cancellationToken){}
	/**
	 * @param \System\Int16 $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetResult($token){}
	/**
	 * @param \System\Int16 $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStatus($token){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
