<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DisposableOverride {
	/**
	 * @deprecated
	 * @param \System\Action $dispose
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function Create_1 ($dispose){}
	/**
	 * @deprecated
	 * @param \TState $state
	 * @param \System\Action_1 $dispose [generic: TState]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function Create_2 ($state, $dispose){}
}
class Disposable extends \System\Object
{
	use DisposableOverride;

	/**
	 * @property
	 * @var \System\IDisposable
	 * @since readonly
	 */
	public $Empty;
	/**
	 * @uses DisposableOverride::Create_1 <br>public , args: ($dispose)<br>
	 * @uses DisposableOverride::Create_2 <br>public , args: ($state, $dispose)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
}