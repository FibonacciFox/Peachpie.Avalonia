<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TopLevelInfoMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class TopLevelInfo extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public $Compositor;
	/**
	 * @var \Avalonia\Rendering\Composition\CompositingRenderer
	 * @property
	 */
	public $Renderer;
	/**
	 * @var \Avalonia\Layout\ILayoutManager
	 * @property
	 */
	public $LayoutManager;
	/**
	 * @return \System\Type
	 */
	protected  function get_EqualityContract(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $value
	 * @return \System\Void|void
	 */
	public  function set_Compositor($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositingRenderer
	 */
	public  function get_Renderer(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositingRenderer $value
	 * @return \System\Void|void
	 */
	public  function set_Renderer($value){}
	/**
	 * @return \Avalonia\Layout\ILayoutManager
	 */
	public  function get_LayoutManager(){}
	/**
	 * @param \Avalonia\Layout\ILayoutManager $value
	 * @return \System\Void|void
	 */
	public  function set_LayoutManager($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean
	 */
	protected  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TopLevelInfo $left
	 * @param \Avalonia\Media\TopLevelInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TopLevelInfo $left
	 * @param \Avalonia\Media\TopLevelInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TopLevelInfoMethodsOverride::Equals_1 ($obj)
	 * @uses TopLevelInfoMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor& $Compositor
	 * @param \Avalonia\Rendering\Composition\CompositingRenderer& $Renderer
	 * @param \Avalonia\Layout\ILayoutManager& $LayoutManager
	 * @return \System\Void|void
	 */
	public  function Deconstruct($Compositor, $Renderer, $LayoutManager){}
}
