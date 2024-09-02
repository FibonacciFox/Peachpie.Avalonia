<?php
namespace Avalonia\Rendering\Composition\Server;
final class ReadbackData extends \System\ValueType
{
	/**
	 * @field
	 * @var \Avalonia\Matrix
	 */
	public $Matrix;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	public $Revision;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $TargetId;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $Visible;

}