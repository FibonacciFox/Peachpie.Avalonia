<?php
namespace Avalonia\Controls\Utils;
/**
 */
interface IUndoRedoHost
{
	/**
	 */
	public function get_UndoRedoState();
	/**
	 * @param \Avalonia\Controls\Utils\TState $value
	 */
	public function set_UndoRedoState($value);
	/**
	 */
	public function OnUndoStackChanged();
	/**
	 */
	public function OnRedoStackChanged();
}
