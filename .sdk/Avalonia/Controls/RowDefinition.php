<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RowDefinitionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $value
	 * @param \Avalonia\Controls\GridUnitType $type
	 */
	#[MethodOverride]public function __construct_2 ($value, $type){}
	/**
	 * @param \Avalonia\Controls\GridLength $height
	 */
	#[MethodOverride]public function __construct_3 ($height){}
}
class RowDefinition extends \Avalonia\Controls\DefinitionBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use RowDefinitionOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaxHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MinHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\GridLength]
	 */
	public static $HeightProperty;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_parentIndex;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ActualHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinHeight;
	/**
	 * @property
	 * @var \Avalonia\Controls\GridLength
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $SharedSizeGroup;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses RowDefinitionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RowDefinitionOverride::__construct_2 <br>public , args: ($value, $type)<br>
	 * @uses RowDefinitionOverride::__construct_3 <br>public , args: ($height)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}