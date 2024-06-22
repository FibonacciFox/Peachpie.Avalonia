<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumeratorOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\KeyValuePair_2
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class Enumerator extends \System\ValueType implements
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use EnumeratorOverride;

	/**
	 * @property
	 * @var \System\Collections\Generic\KeyValuePair_2[TKey,TValue]
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @uses EnumeratorOverride::get_Current_1 <br>public , args: ()<br>
	 * @uses EnumeratorOverride::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\KeyValuePair_2|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Utilities\InlineDictionary_2 $parent [generic: TKey,TValue]
	 */
	public function __construct($parent){}
}