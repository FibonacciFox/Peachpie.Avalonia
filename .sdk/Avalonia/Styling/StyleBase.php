<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StyleBaseOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride]public function get_Children_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]private function get_Children_2 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_1 ($setter){}
	/**
	 * @deprecated
	 * @param \Avalonia\Styling\IStyle $style
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($style){}
}
class StyleBase extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	use StyleBaseOverride;

	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Styling\IStyle]
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceHost
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Styling\IStyle
	 */
	public $Parent;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Styling\SetterBase]
	 * @since readonly
	 */
	public $Setters;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Animation\IAnimation]
	 * @since readonly
	 */
	public $Animations;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses StyleBaseOverride::get_Children_1 <br>public , args: ()<br>
	 * @uses StyleBaseOverride::get_Children_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IList_1|\System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Children (){}
	private function get_HasResources(){}
	/**
	 * @uses StyleBaseOverride::Add_1 <br>public , args: ($setter)<br>
	 * @uses StyleBaseOverride::Add_2 <br>public , args: ($style)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
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
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $themeVariant
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $themeVariant, &$result){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @param \System\Boolean|bool $canShareInstance
	 * @return \Avalonia\PropertyStore\ValueFrame
	 */
	protected function Attach($target, $activator, $type, $canShareInstance){}
	/**
	 * @param \Avalonia\Styling\StyleBase $parent
	 * @return \System\Void|void
	 */
	protected function SetParent($parent){}
	private function AddOwner($owner){}
	private function RemoveOwner($owner){}
	private function GetPropertyChangedSubscribers(){}
}