<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContainerOverride {
	/**
	 * @deprecated
	 * @return \System\Runtime\CompilerServices\ConditionalWeakTable_2
	 */
	#[MethodOverride]protected function Resize_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $newSize
	 * @return \System\Runtime\CompilerServices\ConditionalWeakTable_2
	 */
	#[MethodOverride]protected function Resize_2 ($newSize){}
}
final class Container extends \System\Object
{
	use ContainerOverride;


	/**
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	protected function CreateEntryNoResize($key, $value){}
	/**
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	protected function TryGetValueWorker($key, &$value){}
	/**
	 * @param \TKey $key
	 * @param \System\Object& &$value
	 * @return \System\Int32|int
	 */
	protected function FindEntry($key, &$value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \TKey& &$key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	protected function TryGetEntry($index, &$key, &$value){}
	/**
	 * @return \System\Void|void
	 */
	protected function RemoveAllKeys(){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	protected function Remove($key){}
	private function RemoveIndex($entryIndex){}
	/**
	 * @param \System\Int32|int $entryIndex
	 * @param \TValue $newValue
	 * @return \System\Void|void
	 */
	protected function UpdateValue($entryIndex, $newValue){}
	/**
	 * @uses ContainerOverride::Resize_1 <br>protected , args: ()<br>
	 * @uses ContainerOverride::Resize_2 <br>protected , args: ($newSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\CompilerServices\ConditionalWeakTable_2|mixed|\override
	 */
	#[MethodOverrideProtected]function Resize (\override ...$args){}
	private function VerifyIntegrity(){}
}