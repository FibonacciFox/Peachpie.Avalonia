<?php
namespace Avalonia\Input\Raw;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RawPointerPointOverride {
	/**
	 * @param \Avalonia\Size $size
	 */
	#[MethodOverride]public function __construct_1 ($size){}
	/**
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 */
	#[MethodOverride]public function __construct_2 ($width, $height){}
}
class RawSizeEventArgs extends \System\EventArgs
{
	use RawPointerPointOverride;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Size;
	/**
	 * @uses RawSizeEventArgsOverride::__construct_1 <br>public , args: ($size)<br>
	 * @uses RawSizeEventArgsOverride::__construct_2 <br>public , args: ($width, $height)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}