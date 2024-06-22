<?php
namespace Avalonia\Data\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MethodToCommandConverterOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $target
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Action_1
	 */
	#[MethodOverride]private static function CreateExecute_1 ($target, $method){}
	/**
	 * @deprecated
	 * @param \System\Object|object $target
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Type $parameterType
	 * @return \System\Action_1
	 */
	#[MethodOverride]private static function CreateExecute_2 ($target, $method, $parameterType){}
}
class MethodToCommandConverter extends \System\Object implements
	\System\Windows\Input\ICommand
{
	use MethodToCommandConverterOverride;


	private function OnPropertyChanged($sender, $args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CanExecuteChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CanExecuteChanged($value){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Boolean|bool
	 */
	public function CanExecute($parameter){}
	/**
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	public function Execute($parameter){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MethodToCommandConverterOverride::CreateExecute_1 <br>private , args: ($target, $method)<br>
	 * @uses MethodToCommandConverterOverride::CreateExecute_2 <br>private , args: ($target, $method, $parameterType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Action_1|mixed|\override
	 */
	#[MethodOverridePrivate]function CreateExecute (\override ...$args){}
	private static function CreateCanExecute($target, $method){}
	private static function ConvertTarget($target, $method){}
	/**
	 * @param \System\Delegate $action
	 */
	public function __construct($action){}
}