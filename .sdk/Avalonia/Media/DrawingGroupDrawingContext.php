<?php
namespace Avalonia\Media;
final class DrawingGroupDrawingContext extends \Avalonia\Media\DrawingContext implements
	\System\IDisposable
{

	private function Pop(){}
	private function PushNewDrawingGroup(){}
	private function AddNewGeometryDrawing($brush, $pen, $geometry){}
	private function AddDrawing($newDrawing){}
	/**
	 * @param \Avalonia\Media\DrawingGroup $drawingGroup
	 */
	public function __construct($drawingGroup){}
}