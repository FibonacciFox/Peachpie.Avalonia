<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceDictionaryOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: System\Object,System\Object]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_2 ($item){}
	/**
	 * @deprecated
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: System\Object,System\Object]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_2 ($item){}
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
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 */
	#[MethodOverride]public function __construct_2 ($owner){}
}
class ResourceDictionary extends \System\Object implements
	\Avalonia\Controls\IResourceDictionary,
	\Avalonia\Controls\IResourceProvider,
	\Avalonia\Controls\IResourceNode,
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Controls\IThemeVariantProvider
{
	use ResourceDictionaryOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Collections\Generic\ICollection_1[System\Object]
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
	 * @var \Avalonia\Controls\IResourceHost
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Controls\IResourceProvider]
	 * @since readonly
	 */
	public $MergedDictionaries;
	/**
	 * @property
	 * @var \System\Collections\Generic\IDictionary_2[Avalonia\Styling\ThemeVariant,Avalonia\Controls\IThemeVariantProvider]
	 * @since readonly
	 */
	public $ThemeDictionaries;
	private function get_Key(){}
	private function set_Key($value){}
	private function get_HasResources(){}
	private function get_IsReadOnly(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_OwnerChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_OwnerChanged($value){}
	/**
	 * @uses ResourceDictionaryOverride::Add_1 <br>public , args: ($key, $value)<br>
	 * @uses ResourceDictionaryOverride::Add_2 <br>private , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Func_2 $factory [generic: System\IServiceProvider,System\Object]
	 * @return \System\Void|void
	 */
	public function AddDeferred($key, $factory){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @uses ResourceDictionaryOverride::Remove_1 <br>public , args: ($key)<br>
	 * @uses ResourceDictionaryOverride::Remove_2 <br>private , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $theme, &$value){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	/**
	 * @uses ResourceDictionaryOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ResourceDictionaryOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function Contains($item){}
	private function CopyTo($array, $arrayIndex){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	protected function ContainsDeferredKey($key){}
	private function AddOwner($owner){}
	private function RemoveOwner($owner){}
	/**
	 * @uses ResourceDictionaryOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ResourceDictionaryOverride::__construct_2 <br>public , args: ($owner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}