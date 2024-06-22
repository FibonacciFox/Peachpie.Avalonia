<?php
namespace Avalonia\Controls\Utils;
interface IUndoRedoHost
{


	/**
	 * @return \System\Void|void
	 */
	public function OnUndoStackChanged();
	/**
	 * @return \System\Void|void
	 */
	public function OnRedoStackChanged();
}