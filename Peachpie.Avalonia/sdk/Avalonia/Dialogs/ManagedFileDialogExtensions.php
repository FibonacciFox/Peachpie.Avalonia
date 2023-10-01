<?php
namespace Avalonia\Dialogs;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ManagedFileDialogExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public static function UseManagedSystemDialogs_1($builder){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public static function UseManagedSystemDialogs_2($builder){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ShowManagedAsync_1($dialog, $parent, $options){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function ShowManagedAsync_2($dialog, $parent, $options){}
}
/**
 */
class ManagedFileDialogExtensions extends \System\Object
{
	/**
	 * @uses ManagedFileDialogExtensionsMethodsOverride::UseManagedSystemDialogs_1 ($builder)
	 * @uses ManagedFileDialogExtensionsMethodsOverride::UseManagedSystemDialogs_2 ($builder)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UseManagedSystemDialogs(mixed ...$args){}
	/**
	 * @uses ManagedFileDialogExtensionsMethodsOverride::ShowManagedAsync_1 ($dialog, $parent, $options)
	 * @uses ManagedFileDialogExtensionsMethodsOverride::ShowManagedAsync_2 ($dialog, $parent, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ShowManagedAsync(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
