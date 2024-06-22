<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Optional_1Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 */
	#[MethodOverride]public function __construct_2 ($property){}
}
class TemplateBinding extends \System\Object implements
	\System\IObservable_1,
	\Avalonia\Data\IBinding,
	\Avalonia\IDescription,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\Avalonia\Styling\ISetterValue,
	\System\IDisposable
{
	use Optional_1Override;

	/**
	 * @property
	 * @var \Avalonia\Data\Converters\IValueConverter
	 */
	public $Converter;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $ConverterParameter;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingMode
	 */
	public $Mode;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @param \System\IObserver_1 $observer [generic: System\Object]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean|bool $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	private function Initialize($setter){}
	private function Subscribed(){}
	private function Unsubscribed(){}
	private function PublishValue(){}
	private function TemplatedParentChanged(){}
	private function TargetPropertyChanged($sender, $e){}
	private function TemplatedParentPropertyChanged($sender, $e){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	public function ProvideValue(){}
	/**
	 * @uses TemplateBindingOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TemplateBindingOverride::__construct_2 <br>public , args: ($property)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}