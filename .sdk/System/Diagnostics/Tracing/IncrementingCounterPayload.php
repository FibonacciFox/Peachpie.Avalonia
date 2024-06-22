<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IncrementingCounterPayloadOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class IncrementingCounterPayload extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use IncrementingCounterPayloadOverride;

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayRateTimeScale;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Increment;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $IntervalSec;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Metadata;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Series;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CounterType;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayUnits;
	/**
	 * @uses IncrementingCounterPayloadOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses IncrementingCounterPayloadOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 */
	public function __construct(){}
}