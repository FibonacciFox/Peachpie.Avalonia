<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComponentOverride {
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
}
class Component extends \System\MarshalByRefObject implements
	\System\ComponentModel\IComponent,
	\System\IDisposable
{
	use ComponentOverride;

	/**
	 * @property
	 * @var \System\ComponentModel\ISite
	 */
	public $Site;
	/**
	 * @property
	 * @var \System\ComponentModel\IContainer
	 * @since readonly
	 */
	public $Container;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Disposed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Disposed($value){}
	/**
	 * @uses ComponentOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses ComponentOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @param \System\Type $service
	 * @return \System\Object|object
	 */
	protected function GetService($service){}
	/**
	 */
	public function __construct(){}
}