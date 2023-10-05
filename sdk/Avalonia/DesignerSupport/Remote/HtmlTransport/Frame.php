<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
class Frame extends \System\ValueType
{
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	public $Data;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $EndOfMessage;
	/**
	 * @var \Avalonia\DesignerSupport\Remote\HtmlTransport\SimpleWebSocket+FrameType
	 * @field
	 */
	public $FrameType;
}
