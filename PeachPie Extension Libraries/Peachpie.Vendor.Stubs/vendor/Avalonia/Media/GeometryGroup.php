<?php
namespace Avalonia\Media;
class GeometryGroup extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\GeometryGroup,Avalonia\Media\GeometryCollection]
	 */
	public static $ChildrenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FillRule]
	 */
	public static $FillRuleProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\GeometryCollection
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Media\FillRule
	 */
	public $FillRule;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ContourLength;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Media\GeometryCollection $oldChildren
	 * @param \Avalonia\Media\GeometryCollection $newChildren
	 * @return \System\Void|void
	 */
	protected function OnChildrenChanged($oldChildren, $newChildren){}
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}