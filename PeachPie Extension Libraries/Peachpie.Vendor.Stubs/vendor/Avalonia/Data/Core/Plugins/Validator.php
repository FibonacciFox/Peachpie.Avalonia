<?php
namespace Avalonia\Data\Core\Plugins;
class Validator extends \Avalonia\Data\Core\Plugins\DataValidationBase implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\System\IObserver_1,
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	private function OnEvent($notifyDataErrorInfo, $ev, $e){}
	private function CreateBindingNotification($value){}
	private function GetReferenceTarget(){}
	private static function GenerateException($errors){}
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $name
	 * @param \Avalonia\Data\Core\Plugins\IPropertyAccessor $inner
	 */
	public function __construct($reference, $name, $inner){}
}