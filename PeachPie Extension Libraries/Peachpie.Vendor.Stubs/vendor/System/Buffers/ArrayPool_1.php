<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayPool_1Override {
	/**
	 * @deprecated
	 * @return \System\Buffers\ArrayPool_1
	 */
	#[MethodOverride]public static function Create_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $maxArrayLength
	 * @param \System\Int32|int $maxArraysPerBucket
	 * @return \System\Buffers\ArrayPool_1
	 */
	#[MethodOverride]public static function Create_2 ($maxArrayLength, $maxArraysPerBucket){}
}
class ArrayPool_1 extends \System\Object
{
	use ArrayPool_1Override;
	/**
	 * @property
	 * @var \System\Buffers\ArrayPool_1[T]
	 * @since readonly
	 */
	public $Shared;
	/**
	 * @uses ArrayPool_1Override::Create_1 <br>public , args: ()<br>
	 * @uses ArrayPool_1Override::Create_2 <br>public , args: ($maxArrayLength, $maxArraysPerBucket)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Buffers\ArrayPool_1|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @param \System\Int32|int $minimumLength
	 * @return \T[]
	 */
	abstract public function Rent($minimumLength);
	/**
	 * @param \T $array
	 * @param \System\Boolean|bool $clearArray
	 * @return \System\Void|void
	 */
	abstract public function Return($array, $clearArray);
}