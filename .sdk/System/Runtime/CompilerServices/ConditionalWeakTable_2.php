<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConditionalWeakTable_2Override {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class ConditionalWeakTable_2 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ConditionalWeakTable_2Override;


	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public function TryAdd($key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function AddOrUpdate($key, $value){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Remove($key){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \TKey $key
	 * @param \System\Runtime\CompilerServices\ConditionalWeakTable_2+CreateValueCallback $createValueCallback [generic: TKey,TValue]
	 * @return \TValue
	 */
	public function GetValue($key, $createValueCallback){}
	private function GetValueLocked($key, $createValueCallback){}
	/**
	 * @param \TKey $key
	 * @return \TValue
	 */
	public function GetOrCreateValue($key){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ConditionalWeakTable_2Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ConditionalWeakTable_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePrivate]function GetEnumerator (){}
	private function CreateEntry($key, $value){}
	/**
	 */
	public function __construct(){}
}