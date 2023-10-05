<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class CompositorRefCountableResource_1 extends \System\Object
{
	/**
	 * @var \T
	 * @property
	 */
	public $Value;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $RefCount;
	/**
	 * @return \Avalonia\Rendering\Composition\Drawing\T
	 */
	public  function get_Value(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Value($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RefCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RefCount($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowInvalidOperation(){}
	/**
	 * @return \System\Void|void
	 */
	public  function AddRef(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Boolean
	 */
	public  function Release($c){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
