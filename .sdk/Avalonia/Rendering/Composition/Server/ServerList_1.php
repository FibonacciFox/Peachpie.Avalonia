<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerList_1 extends \Avalonia\Rendering\Composition\Server\ServerObject implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{

	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[T]
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
	/**
	 * @return \System\Collections\Generic\List_1+Enumerator[T]
	 */
	public function GetEnumerator(){}
	private function GetProperty($name){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}