<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaSynchronizationContextMethodsOverride
{
	/**
	 * @return \Avalonia\Threading\RestoreContext
	 */
	#[MethodOverride] public static function Ensure_1($priority){}
	/**
	 * @return \Avalonia\Threading\RestoreContext
	 */
	#[MethodOverride] public static function Ensure_2($dispatcher, $priority){}
}
/**
 */
class AvaloniaSynchronizationContext extends \System\Threading\SynchronizationContext
{
	/**
	 * @var \Avalonia\Threading\DispatcherPriority
	 * @field
	 */
	protected readonly $Priority;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AutoInstall;
	/**
	 * @return \System\Boolean
	 */
	public static function get_AutoInstall(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function set_AutoInstall($value){}
	/**
	 * @return \System\Void|void
	 */
	public static function InstallIfNeeded(){}
	/**
	 * @uses AvaloniaSynchronizationContextMethodsOverride::Ensure_1 ($priority)
	 * @uses AvaloniaSynchronizationContextMethodsOverride::Ensure_2 ($dispatcher, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Ensure(mixed ...$args){}
}
