<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ShapedBufferOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Int32|int $textSourceLength
	 */
	#[MethodOverride]public function __construct_2 ($textSourceLength){}
}
class TextEndOfParagraph extends \Avalonia\Media\TextFormatting\TextEndOfLine
{
	use ShapedBufferOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @uses TextEndOfParagraphOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TextEndOfParagraphOverride::__construct_2 <br>public , args: ($textSourceLength)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}