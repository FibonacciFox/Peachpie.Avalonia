<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WindowBaseOverride {
	/**
	 * @param \Avalonia\Media\Imaging\Bitmap $bitmap
	 */
	#[MethodOverride]public function __construct_1 ($bitmap){}
	/**
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_2 ($fileName){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_3 ($stream){}
}
class WindowIcon extends \System\Object
{
	use WindowBaseOverride;


	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public function Save($stream){}
	/**
	 * @uses WindowIconOverride::__construct_1 <br>public , args: ($bitmap)<br>
	 * @uses WindowIconOverride::__construct_2 <br>public , args: ($fileName)<br>
	 * @uses WindowIconOverride::__construct_3 <br>public , args: ($stream)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}