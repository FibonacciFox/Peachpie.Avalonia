<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ComponentCollectionOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\ComponentModel\IComponent
	 */
	#[MethodOverride]public function get_Item_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\ComponentModel\IComponent
	 */
	#[MethodOverride]public function get_Item_2 ($index){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\IComponent $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $index){}
}
class ComponentCollection extends \System\Collections\ReadOnlyCollectionBase implements
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	use ComponentCollectionOverride;

	/**
	 * @property duplicate
	 * @var \System\ComponentModel\IComponent
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @uses ComponentCollectionOverride::get_Item_1 <br>public , args: ($name)<br>
	 * @uses ComponentCollectionOverride::get_Item_2 <br>public , args: ($index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ComponentModel\IComponent|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \System\ComponentModel\IComponent $components
	 */
	public function __construct($components){}
}