<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DirectBindingObserver_1Override {
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $source [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_2 ($source){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OnNext_1 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function OnNext_2 ($value){}
}
class DirectBindingObserver_1 extends \System\Object implements
	\System\IObserver_1,
	\System\IDisposable
{
	use DirectBindingObserver_1Override;

	/**
	 * @property
	 * @var \Avalonia\DirectPropertyBase_1[T]
	 * @since readonly
	 */
	public $Property;
	/**
	 * @uses DirectBindingObserver_1Override::Start_1 <br>public , args: ($source)<br>
	 * @uses DirectBindingObserver_1Override::Start_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Start (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
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
	 * @uses DirectBindingObserver_1Override::OnNext_1 <br>public , args: ($value)<br>
	 * @uses DirectBindingObserver_1Override::OnNext_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function OnNext (\override ...$args){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 */
	public function __construct($owner, $property){}
}