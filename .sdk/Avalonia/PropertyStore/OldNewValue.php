<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait _Override {
	/**
	 * @param \Avalonia\PropertyStore\EffectiveValue $oldValue
	 */
	#[MethodOverride]public function __construct_1 ($oldValue){}
	/**
	 * @param \Avalonia\PropertyStore\EffectiveValue $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 */
	#[MethodOverride]public function __construct_2 ($oldValue, $newValue){}
}
final class OldNewValue extends \System\ValueType
{
	use _Override;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\PropertyStore\EffectiveValue
	 */
	public $OldValue;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\PropertyStore\EffectiveValue
	 */
	public $NewValue;
	/**
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 * @return \Avalonia\PropertyStore\ValueStore+OldNewValue
	 */
	public function WithNewValue($newValue){}
	/**
	 * @uses OldNewValueOverride::__construct_1 <br>public , args: ($oldValue)<br>
	 * @uses OldNewValueOverride::__construct_2 <br>public , args: ($oldValue, $newValue)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}