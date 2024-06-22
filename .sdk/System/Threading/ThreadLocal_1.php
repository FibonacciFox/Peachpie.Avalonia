<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadLocal_1Override {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Boolean|bool $trackAllValues
	 */
	#[MethodOverride]public function __construct_2 ($trackAllValues){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($valueFactory){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \System\Boolean|bool $trackAllValues
	 */
	#[MethodOverride]public function __construct_4 ($valueFactory, $trackAllValues){}
}
class ThreadLocal_1 extends \System\Object implements
	\System\IDisposable
{
	use ThreadLocal_1Override;

	/**
	 * @property
	 * @var \T|object
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[T]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueCreated;
	private function Initialize($valueFactory, $trackAllValues){}
	/**
	 * @uses ThreadLocal_1Override::Dispose_1 <br>public , args: ()<br>
	 * @uses ThreadLocal_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private function GetValueSlow(){}
	private function SetValueSlow($value, $slotArray){}
	private function CreateLinkedSlot($slotArray, $id, $value){}
	private function GetValuesAsList(){}
	private static function GrowTable($table, $minLength){}
	private static function GetNewTableSize($minSize){}
	/**
	 * @uses ThreadLocal_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses ThreadLocal_1Override::__construct_2 <br>public , args: ($trackAllValues)<br>
	 * @uses ThreadLocal_1Override::__construct_3 <br>public , args: ($valueFactory)<br>
	 * @uses ThreadLocal_1Override::__construct_4 <br>public , args: ($valueFactory, $trackAllValues)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}