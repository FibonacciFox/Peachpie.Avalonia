<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SingleOrDictionary_2Override {
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
class SingleOrDictionary_2 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use SingleOrDictionary_2Override;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[TValue]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Add($key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @uses SingleOrDictionary_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses SingleOrDictionary_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 */
	public function __construct(){}
}