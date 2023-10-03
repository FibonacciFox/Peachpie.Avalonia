<?php
namespace Avalonia\Data\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MethodToCommandConverterMethodsOverride
{
	/**
	 * @return \System\Action_1
	 */
	#[MethodOverride] private static function CreateExecute_1($target, $method){}
	/**
	 * @return \System\Action_1
	 */
	#[MethodOverride] private static function CreateExecute_2($target, $method, $parameterType){}
}
/**
 */
class MethodToCommandConverter extends \System\Object implements 
	\System\Windows\Input\ICommand
{
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPropertyChanged($sender, $args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CanExecuteChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CanExecuteChanged($value){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Boolean
	 */
	public  function CanExecute($parameter){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	public  function Execute($parameter){}
	/**
	 * @uses MethodToCommandConverterMethodsOverride::CreateExecute_1 ($target, $method)
	 * @uses MethodToCommandConverterMethodsOverride::CreateExecute_2 ($target, $method, $parameterType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateExecute(mixed ...$args){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCanExecute($target, $method){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertTarget($target, $method){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
