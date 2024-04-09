<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ControlThemeOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Type $targetType
	 */
	#[MethodOverride]public function __construct_2 ($targetType){}
}
class ControlTheme extends \Avalonia\Styling\StyleBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	use ControlThemeOverride;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $TargetType;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $BasedOn;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Styling\IStyle]
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceHost
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Styling\IStyle
	 * @since readonly
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	protected function TryAttach($target, $type){}
	private function get_HasResources(){}
	private function AddOwner($owner){}
	private function RemoveOwner($owner){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ControlThemeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ControlThemeOverride::__construct_2 <br>public , args: ($targetType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}