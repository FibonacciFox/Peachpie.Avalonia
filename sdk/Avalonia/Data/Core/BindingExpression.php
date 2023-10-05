<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BindingExpressionMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function ConvertValue_1($value){}
	/**
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride] private  function ConvertValue_2($notification){}
	/**
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride] private static function Merge_1($a, $b){}
	/**
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride] private static function Merge_2($a, $b){}
	/**
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride] private static function Merge_3($a, $b){}
}
/**
 */
class BindingExpression extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\Avalonia\IDescription
{
	/**
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @property
	 */
	public readonly $Converter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $ConverterParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasObservers;
	/**
	 * @return \Avalonia\Data\Converters\IValueConverter
	 */
	public  function get_Converter(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_ConverterParameter(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Description(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @uses BindingExpressionMethodsOverride::ConvertValue_1 ($value)
	 * @uses BindingExpressionMethodsOverride::ConvertValue_2 ($notification)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertValue(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertFallback(){}
	/**
	 * @uses BindingExpressionMethodsOverride::Merge_1 ($a, $b)
	 * @uses BindingExpressionMethodsOverride::Merge_2 ($a, $b)
	 * @uses BindingExpressionMethodsOverride::Merge_3 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Merge(mixed ...$args){}
}
