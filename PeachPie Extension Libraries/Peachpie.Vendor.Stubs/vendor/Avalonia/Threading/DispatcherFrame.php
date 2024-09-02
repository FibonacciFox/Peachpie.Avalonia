<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $exitWhenRequested
	 */
	#[MethodOverride]public function __construct_2 ($exitWhenRequested){}
}
class DispatcherFrame extends \System\Object
{
	use DispatcherOverride;
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public $Dispatcher;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Continue;
	/**
	 * @param \Avalonia\Threading\IControlledDispatcherImpl $impl
	 * @return \System\Void|void
	 */
	protected function Run($impl){}
	/**
	 * @return \System\Void|void
	 */
	protected function MaybeExitOnDispatcherRequest(){}
	/**
	 * @uses DispatcherFrameOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DispatcherFrameOverride::__construct_2 <br>public , args: ($exitWhenRequested)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}