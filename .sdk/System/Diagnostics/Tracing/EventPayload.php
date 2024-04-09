<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventPayloadOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $payloadEntry [generic: System\String,System\Object]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($payloadEntry){}
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
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $entry [generic: System\String,System\Object]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_2 ($entry){}
}
final class EventPayload extends \System\Object implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use EventPayloadOverride;
	/**
	 * @property
	 * @var \System\Collections\Generic\ICollection_1[System\String]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\ICollection_1[System\Object]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @uses EventPayloadOverride::Add_1 <br>public , args: ($key, $value)<br>
	 * @uses EventPayloadOverride::Add_2 <br>public , args: ($payloadEntry)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $entry [generic: System\String,System\Object]
	 * @return \System\Boolean|bool
	 */
	public function Contains($entry){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @uses EventPayloadOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses EventPayloadOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $payloadEntries [generic: System\String,System\Object]
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function CopyTo($payloadEntries, $count){}
	/**
	 * @uses EventPayloadOverride::Remove_1 <br>public , args: ($key)<br>
	 * @uses EventPayloadOverride::Remove_2 <br>public , args: ($entry)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
}