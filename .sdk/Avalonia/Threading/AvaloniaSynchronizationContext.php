<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaSynchronizationContextOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\AvaloniaSynchronizationContext
	 */
	#[MethodOverride]public static function Ensure_1 ($priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\Threading\Dispatcher $dispatcher
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\AvaloniaSynchronizationContext
	 */
	#[MethodOverride]public static function Ensure_2 ($dispatcher, $priority){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 */
	#[MethodOverride]public function __construct_2 ($priority){}
}
class AvaloniaSynchronizationContext extends \System\Threading\SynchronizationContext
{
	use AvaloniaSynchronizationContextOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Threading\DispatcherPriority
	 */
	protected $Priority;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoInstall;
	/**
	 * @return \System\Void|void
	 */
	public static function InstallIfNeeded(){}
	/**
	 * @uses AvaloniaSynchronizationContextOverride::Ensure_1 <br>public , args: ($priority)<br>
	 * @uses AvaloniaSynchronizationContextOverride::Ensure_2 <br>public , args: ($dispatcher, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Threading\AvaloniaSynchronizationContext|mixed|\override
	 */
	#[MethodOverridePublic]function Ensure (\override ...$args){}
	/**
	 * @uses AvaloniaSynchronizationContextOverride::__construct_1 <br>public , args: ()<br>
	 * @uses AvaloniaSynchronizationContextOverride::__construct_2 <br>public , args: ($priority)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}