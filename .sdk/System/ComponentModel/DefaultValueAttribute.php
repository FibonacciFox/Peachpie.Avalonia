<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UmAlQuraCalendarOverride {
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_1 ($type, $value){}
	/**
	 * @param \System\Char $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 * @param \System\Byte $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\Int16 $value
	 */
	#[MethodOverride]public function __construct_4 ($value){}
	/**
	 * @param \System\Int32|int $value
	 */
	#[MethodOverride]public function __construct_5 ($value){}
	/**
	 * @param \System\Int64|int $value
	 */
	#[MethodOverride]public function __construct_6 ($value){}
	/**
	 * @param \System\Single $value
	 */
	#[MethodOverride]public function __construct_7 ($value){}
	/**
	 * @param \System\Double|double $value
	 */
	#[MethodOverride]public function __construct_8 ($value){}
	/**
	 * @param \System\Boolean|bool $value
	 */
	#[MethodOverride]public function __construct_9 ($value){}
	/**
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_10 ($value){}
	/**
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_11 ($value){}
	/**
	 * @param \System\SByte $value
	 */
	#[MethodOverride]public function __construct_12 ($value){}
	/**
	 * @param \System\UInt16 $value
	 */
	#[MethodOverride]public function __construct_13 ($value){}
	/**
	 * @param \System\UInt32 $value
	 */
	#[MethodOverride]public function __construct_14 ($value){}
	/**
	 * @param \System\UInt64 $value
	 */
	#[MethodOverride]public function __construct_15 ($value){}
}
class DefaultValueAttribute extends \System\Attribute
{
	use UmAlQuraCalendarOverride;

	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected function SetValue($value){}
	/**
	 * @uses DefaultValueAttributeOverride::__construct_1 <br>public , args: ($type, $value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_2 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_4 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_5 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_6 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_7 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_8 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_9 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_10 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_11 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_12 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_13 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_14 <br>public , args: ($value)<br>
	 * @uses DefaultValueAttributeOverride::__construct_15 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}