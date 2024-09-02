<?php
namespace System\Runtime\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SerializationInfoEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Runtime\Serialization\SerializationEntry
	 */
	#[MethodOverride]public function get_Current_2 (){}
}
final class SerializationInfoEnumerator extends \System\Object implements
	\System\Collections\IEnumerator
{
	use SerializationInfoEnumeratorOverride;
	/**
	 * @property
	 * @var \System\Runtime\Serialization\SerializationEntry
	 * @since readonly
	 */
	public $Current;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ObjectType;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @uses SerializationInfoEnumeratorOverride::get_Current_1 <br>private , args: ()<br>
	 * @uses SerializationInfoEnumeratorOverride::get_Current_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Runtime\Serialization\SerializationEntry|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
}