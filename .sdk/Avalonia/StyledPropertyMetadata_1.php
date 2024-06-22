<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StyledPropertyMetadata_1Override {
	/**
	 * @deprecated
	 * @return \TValue
	 */
	#[MethodOverride]public function get_DefaultValue_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_DefaultValue_2 (){}
}
class StyledPropertyMetadata_1 extends \Avalonia\AvaloniaPropertyMetadata implements
	\Avalonia\IStyledPropertyMetadata
{
	use StyledPropertyMetadata_1Override;

	/**
	 * @property
	 * @var \TValue
	 * @since readonly
	 */
	public $DefaultValue;
	/**
	 * @property
	 * @var \System\Func_3[Avalonia\AvaloniaObject,TValue,TValue]
	 */
	public $CoerceValue;
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
	 * @uses StyledPropertyMetadata_1Override::get_DefaultValue_1 <br>public , args: ()<br>
	 * @uses StyledPropertyMetadata_1Override::get_DefaultValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_DefaultValue (){}
	/**
	 * @param \Avalonia\Data\Optional_1 $defaultValue [generic: TValue]
	 * @param \Avalonia\Data\BindingMode $defaultBindingMode
	 * @param \System\Func_3 $coerce [generic: Avalonia\AvaloniaObject,TValue,TValue]
	 * @param \System\Boolean|bool $enableDataValidation
	 */
	public function __construct($defaultValue, $defaultBindingMode, $coerce, $enableDataValidation){}
}