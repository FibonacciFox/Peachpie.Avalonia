<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RoutedEventRegistryOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function GetRegistered_1 ($type){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function GetRegistered_2 (){}
}
class RoutedEventRegistry extends \System\Object
{
	use RoutedEventRegistryOverride;

	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEventRegistry
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\Interactivity\RoutedEvent $event
	 * @return \System\Void|void
	 */
	public function Register($type, $event){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Interactivity\RoutedEvent]
	 */
	public function GetAllRegistered(){}
	/**
	 * @uses RoutedEventRegistryOverride::GetRegistered_1 <br>public , args: ($type)<br>
	 * @uses RoutedEventRegistryOverride::GetRegistered_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetRegistered (\override ...$args){}
	/**
	 */
	public function __construct(){}
}