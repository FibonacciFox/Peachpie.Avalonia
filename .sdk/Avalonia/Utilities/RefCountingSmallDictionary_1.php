<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RefCountingSmallDictionary_1Override {
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
final class RefCountingSmallDictionary_1 extends \System\ValueType implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use RefCountingSmallDictionary_1Override;


	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Add($key){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Remove($key){}
	/**
	 * @uses RefCountingSmallDictionary_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses RefCountingSmallDictionary_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses RefCountingSmallDictionary_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\InlineDictionary_2|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
}