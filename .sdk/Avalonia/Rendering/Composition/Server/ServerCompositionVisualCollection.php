<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionVisualCollection extends \Avalonia\Rendering\Composition\Server\ServerList_1 implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{

	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Server\ServerCompositionVisual]
	 * @since readonly
	 */
	public $List;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsActive;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	private function GetProperty($name){}
}