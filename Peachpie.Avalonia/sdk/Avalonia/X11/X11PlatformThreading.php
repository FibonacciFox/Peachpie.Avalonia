<?php
namespace Avalonia\X11;
/**
 */
class X11PlatformThreading extends \System\Object implements 
	\Avalonia\Threading\IControlledDispatcherImpl,
	\Avalonia\Threading\IDispatcherImplWithPendingInput,
	\Avalonia\Threading\IDispatcherImpl
{
	/**
	 * @param \System\Int32|int $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function epoll_create1($size){}
	/**
	 * @param \System\Int32|int $epfd
	 * @param \System\Int32|int $op
	 * @param \System\Int32|int $fd
	 * @param \Avalonia\X11\epoll_event& $__event
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function epoll_ctl($epfd, $op, $fd, $__event){}
	/**
	 * @param \System\Int32|int $epfd
	 * @param \Avalonia\X11\epoll_event* $events
	 * @param \System\Int32|int $maxevents
	 * @param \System\Int32|int $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function epoll_wait($epfd, $events, $maxevents, $timeout){}
	/**
	 * @param \System\Int32* $fds
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function pipe2($fds, $flags){}
	/**
	 * @param \System\Int32|int $fd
	 * @param \System\Void* $buf
	 * @param \System\IntPtr $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function write($fd, $buf, $count){}
	/**
	 * @param \System\Int32|int $fd
	 * @param \System\Void* $buf
	 * @param \System\IntPtr $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function read($fd, $buf, $count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckSignaled(){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleX11($cancellationToken){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public  function RunLoop($cancellationToken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Wakeup(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Signal(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CurrentThreadIsLoopThread(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_Timer($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_Timer($value){}
	/**
	 * @param \System\Nullable_1 $dueTimeInMs
	 * @return \System\Void|void
	 */
	public  function UpdateTimer($dueTimeInMs){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Now(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanQueryPendingInput(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasPendingInput(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
