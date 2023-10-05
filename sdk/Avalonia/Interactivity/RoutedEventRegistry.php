<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RoutedEventRegistryMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function GetRegistered_1($type){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function GetRegistered_2(){}
}
/**
 */
class RoutedEventRegistry extends \System\Object
{
	/**
	 * @var \Avalonia\Interactivity\RoutedEventRegistry
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Interactivity\RoutedEventRegistry
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Type $type
	 * @param \Avalonia\Interactivity\RoutedEvent $event
	 * @return \System\Void|void
	 */
	public  function Register($type, $event){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetAllRegistered(){}
	/**
	 * @uses RoutedEventRegistryMethodsOverride::GetRegistered_1 ($type)
	 * @uses RoutedEventRegistryMethodsOverride::GetRegistered_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetRegistered(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
