<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class ElementComposition extends \System\Object
{
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public static function GetElementVisual($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $compositionVisual
	 * @return \System\Void|void
	 */
	public static function SetElementChildVisual($visual, $compositionVisual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public static function GetElementChildVisual($visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
