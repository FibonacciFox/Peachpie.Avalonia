<?php
namespace Avalonia\Media;
class TopLevelInfo extends \System\Object implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\CompositingRenderer
	 */
	public $Renderer;
	/**
	 * @property
	 * @var \Avalonia\Layout\ILayoutManager
	 */
	public $LayoutManager;
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean|bool
	 */
	protected function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\MediaContext+TopLevelInfo $left
	 * @param \Avalonia\Media\MediaContext+TopLevelInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\MediaContext+TopLevelInfo $left
	 * @param \Avalonia\Media\MediaContext+TopLevelInfo $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor& &$Compositor
	 * @param \Avalonia\Rendering\Composition\CompositingRenderer& &$Renderer
	 * @param \Avalonia\Layout\ILayoutManager& &$LayoutManager
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$Compositor, &$Renderer, &$LayoutManager){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $Compositor
	 * @param \Avalonia\Rendering\Composition\CompositingRenderer $Renderer
	 * @param \Avalonia\Layout\ILayoutManager $LayoutManager
	 */
	public function __construct($Compositor, $Renderer, $LayoutManager){}
}