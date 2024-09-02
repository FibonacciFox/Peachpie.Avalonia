<?php
namespace Avalonia\Controls;
final class UndoRedoState extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CaretPosition;
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $caretPosition
	 */
	public function __construct($text, $caretPosition){}
}