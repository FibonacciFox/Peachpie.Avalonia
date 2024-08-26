<?php
namespace Avalonia\Rendering\Composition\Drawing;
class CompositorRefCountableResource_1 extends \System\Object
{
	/**
	 * @property
	 * @var \T|object
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $RefCount;
	private static function ThrowInvalidOperation(){}
	/**
	 * @return \System\Void|void
	 */
	public function AddRef(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Boolean|bool
	 */
	public function Release($c){}
	/**
	 * @param \T|object $value
	 */
	public function __construct($value){}
}