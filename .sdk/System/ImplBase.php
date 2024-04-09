<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImplBaseOverride {
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
}
class ImplBase extends \System\Object
{
	use ImplBaseOverride;

	/**
	 * @return \System\Double|double
	 */
	abstract public function Sample();
	/**
	 * @uses ImplBaseOverride::Next_1 <br>public , args: ()<br>
	 * @uses ImplBaseOverride::Next_2 <br>public , args: ($maxValue)<br>
	 * @uses ImplBaseOverride::Next_3 <br>public , args: ($minValue, $maxValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Next (\override ...$args){}
	/**
	 * @uses ImplBaseOverride::NextInt64_1 <br>public , args: ()<br>
	 * @uses ImplBaseOverride::NextInt64_2 <br>public , args: ($maxValue)<br>
	 * @uses ImplBaseOverride::NextInt64_3 <br>public , args: ($minValue, $maxValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function NextInt64 (\override ...$args){}
	/**
	 * @return \System\Single
	 */
	abstract public function NextSingle();
	/**
	 * @return \System\Double|double
	 */
	abstract public function NextDouble();
	/**
	 * @uses ImplBaseOverride::NextBytes_1 <br>public , args: ($buffer)<br>
	 * @uses ImplBaseOverride::NextBytes_2 <br>public , args: ($buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function NextBytes (\override ...$args){}
}