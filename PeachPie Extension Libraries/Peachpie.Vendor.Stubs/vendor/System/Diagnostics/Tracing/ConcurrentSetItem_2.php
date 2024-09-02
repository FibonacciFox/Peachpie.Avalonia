<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConcurrentSetItem_2Override {
	/**
	 * @deprecated
	 * @param \ItemType $other
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_1 ($other){}
	/**
	 * @deprecated
	 * @param \KeyType $key
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Compare_2 ($key){}
}
class ConcurrentSetItem_2 extends \System\Object
{
	use ConcurrentSetItem_2Override;

	/**
	 * @uses ConcurrentSetItem_2Override::Compare_1 <br>public , args: ($other)<br>
	 * @uses ConcurrentSetItem_2Override::Compare_2 <br>public , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
}