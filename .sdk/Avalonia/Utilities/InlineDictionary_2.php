<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InlineDictionary_2Override {
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\InlineDictionary_2
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
final class InlineDictionary_2 extends \System\ValueType implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use InlineDictionary_2Override;
	/**
	 * @property
	 * @var \TValue
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasEntries;
	private function SetCore($key, $value, $overwrite){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Set($key, $value){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Remove($key){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @param \TKey $key
	 * @return \TValue&
	 */
	public function GetValueRefOrNullRef($key){}
	/**
	 * @param \TKey $key
	 * @param \System\Boolean& &$exists
	 * @return \TValue&
	 */
	public function GetValueRefOrAddDefault($key, &$exists){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetAndRemoveValue($key, &$value){}
	/**
	 * @param \TKey $key
	 * @return \TValue
	 */
	public function GetAndRemove($key){}
	/**
	 * @uses InlineDictionary_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses InlineDictionary_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses InlineDictionary_2Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\InlineDictionary_2|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
}