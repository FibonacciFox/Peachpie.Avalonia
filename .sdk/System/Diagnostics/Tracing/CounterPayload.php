<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CounterPayloadOverride {
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
final class CounterPayload extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use CounterPayloadOverride;

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
	 * @var \System\Double|double
	 */
	public $Mean;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $StandardDeviation;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Min;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Max;
	/**
	 * @property
	 * @var \System\Single
	 */
	public $IntervalSec;
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
	public $Metadata;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayUnits;
	/**
	 * @uses CounterPayloadOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses CounterPayloadOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 */
	public function __construct(){}
}