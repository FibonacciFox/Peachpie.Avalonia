<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GraphMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Measure_1($availableSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Measure_2($nodes, $set){}
}
/**
 */
class Graph extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AvailableSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_AvailableSize($value){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetNodes(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Boolean $clearPos
	 * @return \System\Void|void
	 */
	public  function Reset($clearPos){}
	/**
	 * @param \Avalonia\Controls\GraphNode $from
	 * @param \Avalonia\Layout\Layoutable $to
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function AddLink($from, $to){}
	/**
	 * @param \Avalonia\Layout\Layoutable $value
	 * @return \Avalonia\Controls\GraphNode
	 */
	public  function AddNode($value){}
	/**
	 * @uses GraphMethodsOverride::Measure_1 ($availableSize)
	 * @uses GraphMethodsOverride::Measure_2 ($nodes, $set)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Measure(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\GraphNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MeasureChild($node){}
	/**
	 * @param \System\Boolean $calcWidth
	 * @param \System\Boolean $calcHeight
	 * @return \Avalonia\Size
	 */
	public  function GetBoundingSize($calcWidth, $calcHeight){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
