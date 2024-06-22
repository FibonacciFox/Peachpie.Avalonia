<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DirectPropertyMetadata_1Override {
	/**
	 * @deprecated
	 * @return \TValue
	 */
	#[MethodOverride]public function get_UnsetValue_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_UnsetValue_2 (){}
}
class DirectPropertyMetadata_1 extends \Avalonia\AvaloniaPropertyMetadata implements
	\Avalonia\IDirectPropertyMetadata
{
	use DirectPropertyMetadata_1Override;

	/**
	 * @property
	 * @var \TValue
	 */
	public $UnsetValue;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingMode
	 * @since readonly
	 */
	public $DefaultBindingMode;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 * @since readonly
	 */
	public $EnableDataValidation;
	/**
	 * @uses DirectPropertyMetadata_1Override::get_UnsetValue_1 <br>public , args: ()<br>
	 * @uses DirectPropertyMetadata_1Override::get_UnsetValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_UnsetValue (){}
	/**
	 * @param \TValue $unsetValue
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Nullable_1 $enableDataValidation [generic: System\Boolean]
	 */
	public function __construct($unsetValue, $defaultBindingMode, $enableDataValidation){}
}