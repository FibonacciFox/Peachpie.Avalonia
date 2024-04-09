<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextShaperOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	#[MethodOverride]public function ShapeText_1 ($text, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $options
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	#[MethodOverride]public function ShapeText_2 ($text, $options){}
}
class TextShaper extends \System\Object
{
	use TextShaperOverride;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextShaper
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses TextShaperOverride::ShapeText_1 <br>public , args: ($text, $options)<br>
	 * @uses TextShaperOverride::ShapeText_2 <br>public , args: ($text, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer|mixed|\override
	 */
	#[MethodOverridePublic]function ShapeText (\override ...$args){}
	/**
	 * @param \Avalonia\Platform\ITextShaperImpl $platformImpl
	 */
	public function __construct($platformImpl){}
}