<?php
namespace Avalonia\Platform\Internal;
class AvaloniaResourceDescriptor extends \System\Object implements
	\Avalonia\Platform\Internal\IAssetDescriptor
{

	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @return \System\IO\Stream
	 */
	public function GetStream(){}
	/**
	 * @param \System\Reflection\Assembly $asm
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $length
	 */
	public function __construct($asm, $offset, $length){}
}