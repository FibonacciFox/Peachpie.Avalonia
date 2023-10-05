<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
class WebSocketHeader extends \System\ValueType
{
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $Mask;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $Length8;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	public $Length16;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $Length64;
}
