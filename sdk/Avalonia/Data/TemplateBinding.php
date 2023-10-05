<?php
namespace Avalonia\Data;
/**
 */
class TemplateBinding extends \System\Object implements 
	\System\IObservable_1,
	\Avalonia\Data\IBinding,
	\Avalonia\IDescription,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\Avalonia\Styling\ISetterValue,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @property
	 */
	public $Converter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $ConverterParameter;
	/**
	 * @var \Avalonia\Data\BindingMode
	 * @property
	 */
	public $Mode;
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public $Property;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @return \Avalonia\Data\Converters\IValueConverter
	 */
	public  function get_Converter(){}
	/**
	 * @param \Avalonia\Data\Converters\IValueConverter $value
	 * @return \System\Void|void
	 */
	public  function set_Converter($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_ConverterParameter(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_ConverterParameter($value){}
	/**
	 * @return \Avalonia\Data\BindingMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \Avalonia\Data\BindingMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	public  function set_Property($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnError($error){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
	/**
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($setter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Subscribed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Unsubscribed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublishValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TemplatedParentChanged(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TargetPropertyChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TemplatedParentPropertyChanged($sender, $e){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	public  function ProvideValue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
