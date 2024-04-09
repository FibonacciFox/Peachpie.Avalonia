<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaPropertyDictionary_1Override {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \TValue
	 */
	#[MethodOverride]public function get_Item_1 ($property){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \TValue
	 */
	#[MethodOverride]public function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_2 ($property, &$value){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $capactity
	 */
	#[MethodOverride]public function __construct_2 ($capactity){}
}
final class AvaloniaPropertyDictionary_1 extends \System\ValueType
{
	use AvaloniaPropertyDictionary_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property dublicate
	 * @var \TValue
	 */
	public $Item;
	/**
	 * @uses AvaloniaPropertyDictionary_1Override::get_Item_1 <br>public , args: ($property)<br>
	 * @uses AvaloniaPropertyDictionary_1Override::get_Item_2 <br>public , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \TValue $value
	 * @return \System\Void|void
	 */
	public function Add($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($property){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\AvaloniaProperty& &$key
	 * @param \TValue& &$value
	 * @return \System\Void|void
	 */
	public function GetKeyValue($index, &$key, &$value){}
	/**
	 * @uses AvaloniaPropertyDictionary_1Override::Remove_1 <br>public , args: ($property)<br>
	 * @uses AvaloniaPropertyDictionary_1Override::Remove_2 <br>public , args: ($property, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public function TryAdd($property, $value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($property, &$value){}
	private function TryGetEntry($propertyId, &$index){}
	private function InsertEntry($entry, $entryIndex){}
	private static function ThrowOutOfRange(){}
	private static function ThrowDuplicate(){}
	private static function ThrowNotFound(){}
	/**
	 * @uses AvaloniaPropertyDictionary_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses AvaloniaPropertyDictionary_1Override::__construct_2 <br>public , args: ($capactity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}