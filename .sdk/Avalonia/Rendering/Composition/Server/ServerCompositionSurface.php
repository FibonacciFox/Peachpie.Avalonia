<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionSurface extends \Avalonia\Rendering\Composition\Server\ServerObject implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @property
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IBitmapImpl]
	 * @since readonly
	 */
	public $Bitmap;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $Changed;
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