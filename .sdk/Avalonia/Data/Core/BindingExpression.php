<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingExpressionOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function ConvertValue_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingNotification $notification
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride]private function ConvertValue_2 ($notification){}
	/**
	 * @deprecated
	 * @param \System\Object|object $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride]private static function Merge_1 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \System\Object|object $b
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride]private static function Merge_2 ($a, $b){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \Avalonia\Data\BindingNotification
	 */
	#[MethodOverride]private static function Merge_3 ($a, $b){}
	/**
	 * @param \Avalonia\Data\Core\ExpressionObserver $inner
	 * @param \System\Type $targetType
	 */
	#[MethodOverride]public function __construct_1 ($inner, $targetType){}
	/**
	 * @param \Avalonia\Data\Core\ExpressionObserver $inner
	 * @param \System\Type $targetType
	 * @param \Avalonia\Data\Converters\IValueConverter $converter
	 * @param \System\Object|object $converterParameter
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	#[MethodOverride]public function __construct_2 ($inner, $targetType, $converter, $converterParameter, $priority){}
	/**
	 * @param \Avalonia\Data\Core\ExpressionObserver $inner
	 * @param \System\Type $targetType
	 * @param \System\Object|object $fallbackValue
	 * @param \System\Object|object $targetNullValue
	 * @param \Avalonia\Data\Converters\IValueConverter $converter
	 * @param \System\Object|object $converterParameter
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	#[MethodOverride]public function __construct_3 ($inner, $targetType, $fallbackValue, $targetNullValue, $converter, $converterParameter, $priority){}
}
class BindingExpression extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\Avalonia\IDescription
{
	use BindingExpressionOverride;
	/**
	 * @property
	 * @var \Avalonia\Data\Converters\IValueConverter
	 * @since readonly
	 */
	public $Converter;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $ConverterParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	private function get_Description(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BindingExpressionOverride::ConvertValue_1 <br>private , args: ($value)<br>
	 * @uses BindingExpressionOverride::ConvertValue_2 <br>private , args: ($notification)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\Avalonia\Data\BindingNotification|mixed|\override
	 */
	#[MethodOverridePrivate]function ConvertValue (\override ...$args){}
	private function ConvertFallback(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses BindingExpressionOverride::Merge_1 <br>private , args: ($a, $b)<br>
	 * @uses BindingExpressionOverride::Merge_2 <br>private , args: ($a, $b)<br>
	 * @uses BindingExpressionOverride::Merge_3 <br>private , args: ($a, $b)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Data\BindingNotification|mixed|\override
	 */
	#[MethodOverridePrivate]function Merge (\override ...$args){}
	/**
	 * @uses BindingExpressionOverride::__construct_1 <br>public , args: ($inner, $targetType)<br>
	 * @uses BindingExpressionOverride::__construct_2 <br>public , args: ($inner, $targetType, $converter, $converterParameter, $priority)<br>
	 * @uses BindingExpressionOverride::__construct_3 <br>public , args: ($inner, $targetType, $fallbackValue, $targetNullValue, $converter, $converterParameter, $priority)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}