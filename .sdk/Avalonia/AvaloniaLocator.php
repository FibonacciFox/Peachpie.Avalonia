<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaInternalExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $parentScope
	 */
	#[MethodOverride]public function __construct_2 ($parentScope){}
}
class AvaloniaLocator extends \System\Object implements
	\Avalonia\IAvaloniaDependencyResolver
{
	use AvaloniaInternalExceptionOverride;

	/**
	 * @property
	 * @var \Avalonia\IAvaloniaDependencyResolver
	 */
	public $Current;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaLocator
	 */
	public $CurrentMutable;
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public function GetService($t){}
	/**
	 * @return \Avalonia\AvaloniaLocator+RegistrationHelper_1[T]
	 */
	public function Bind(){}
	/**
	 * @param \T|object $constant
	 * @return \Avalonia\AvaloniaLocator
	 */
	public function BindToSelf($constant){}
	/**
	 * @return \Avalonia\AvaloniaLocator
	 */
	public function BindToSelfSingleton(){}
	/**
	 * @return \System\IDisposable
	 */
	public static function EnterScope(){}
	/**
	 * @uses AvaloniaLocatorOverride::__construct_1 <br>public , args: ()<br>
	 * @uses AvaloniaLocatorOverride::__construct_2 <br>public , args: ($parentScope)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}