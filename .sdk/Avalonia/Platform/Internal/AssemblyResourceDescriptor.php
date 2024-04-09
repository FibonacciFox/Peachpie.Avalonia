<?php
namespace Avalonia\Platform\Internal;
class AssemblyResourceDescriptor extends \System\Object implements
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
	 * @param \System\String|string $name
	 */
	public function __construct($asm, $name){}
}