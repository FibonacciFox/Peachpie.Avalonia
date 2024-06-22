<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GraphOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Size $availableSize
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Measure_1 ($availableSize){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $nodes [generic: Avalonia\Controls\RelativePanel+GraphNode]
	 * @param \System\Collections\Generic\HashSet_1 $set [generic: Avalonia\AvaloniaObject]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Measure_2 ($nodes, $set){}
}
class Graph extends \System\Object
{
	use GraphOverride;


	/**
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Controls\RelativePanel+GraphNode]
	 */
	public function GetNodes(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Boolean|bool $clearPos
	 * @return \System\Void|void
	 */
	public function Reset($clearPos){}
	/**
	 * @param \Avalonia\Controls\RelativePanel+GraphNode $from
	 * @param \Avalonia\Layout\Layoutable $to
	 * @return \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public function AddLink($from, $to){}
	/**
	 * @param \Avalonia\Layout\Layoutable $value
	 * @return \Avalonia\Controls\RelativePanel+GraphNode
	 */
	public function AddNode($value){}
	/**
	 * @uses GraphOverride::Measure_1 <br>public , args: ($availableSize)<br>
	 * @uses GraphOverride::Measure_2 <br>private , args: ($nodes, $set)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Measure (\override ...$args){}
	private function MeasureChild($node){}
	/**
	 * @param \System\Boolean|bool $calcWidth
	 * @param \System\Boolean|bool $calcHeight
	 * @return \Avalonia\Size
	 */
	public function GetBoundingSize($calcWidth, $calcHeight){}
	/**
	 */
	public function __construct(){}
}