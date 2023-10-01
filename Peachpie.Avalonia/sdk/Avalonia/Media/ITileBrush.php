<?php
namespace Avalonia\Media;
/**
 */
interface ITileBrush
{
	/**
	 */
	public function get_AlignmentX();
	/**
	 */
	public function get_AlignmentY();
	/**
	 */
	public function get_DestinationRect();
	/**
	 */
	public function get_SourceRect();
	/**
	 */
	public function get_Stretch();
	/**
	 */
	public function get_TileMode();
}
