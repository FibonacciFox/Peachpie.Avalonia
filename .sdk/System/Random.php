<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RandomOverride {
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Next_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $maxValue
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Next_2 ($maxValue){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minValue
	 * @param \System\Int32|int $maxValue
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function Next_3 ($minValue, $maxValue){}
	/**
	 * @deprecated
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function NextInt64_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $maxValue
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function NextInt64_2 ($maxValue){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $minValue
	 * @param \System\Int64|int $maxValue
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public function NextInt64_3 ($minValue, $maxValue){}
	/**
	 * @deprecated
	 * @param \System\Byte $buffer
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function NextBytes_1 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function NextBytes_2 ($buffer){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $Seed
	 */
	#[MethodOverride]public function __construct_2 ($Seed){}
}
class Random extends \System\Object
{
	use RandomOverride;
	/**
	 * @property
	 * @var \System\Random
	 * @since readonly
	 */
	public $Shared;
	/**
	 * @uses RandomOverride::Next_1 <br>public , args: ()<br>
	 * @uses RandomOverride::Next_2 <br>public , args: ($maxValue)<br>
	 * @uses RandomOverride::Next_3 <br>public , args: ($minValue, $maxValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Next (\override ...$args){}
	/**
	 * @uses RandomOverride::NextInt64_1 <br>public , args: ()<br>
	 * @uses RandomOverride::NextInt64_2 <br>public , args: ($maxValue)<br>
	 * @uses RandomOverride::NextInt64_3 <br>public , args: ($minValue, $maxValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function NextInt64 (\override ...$args){}
	/**
	 * @return \System\Single
	 */
	public function NextSingle(){}
	/**
	 * @return \System\Double|double
	 */
	public function NextDouble(){}
	/**
	 * @uses RandomOverride::NextBytes_1 <br>public , args: ($buffer)<br>
	 * @uses RandomOverride::NextBytes_2 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function NextBytes (\override ...$args){}
	/**
	 * @return \System\Double|double
	 */
	protected function Sample(){}
	private static function ThrowMaxValueMustBeNonNegative(){}
	private static function ThrowMinMaxValueSwapped(){}
	/**
	 * @uses RandomOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RandomOverride::__construct_2 <br>public , args: ($Seed)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}