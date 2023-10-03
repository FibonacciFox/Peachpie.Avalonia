<?php
namespace Avalonia\DesignerSupport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DesignWindowLoaderMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Window
	 */
	#[MethodOverride] public static function LoadDesignerWindow_1($xaml, $assemblyPath, $xamlFileProjectPath){}
	/**
	 * @return \Avalonia\Controls\Window
	 */
	#[MethodOverride] public static function LoadDesignerWindow_2($xaml, $assemblyPath, $xamlFileProjectPath, $renderScaling){}
}
/**
 */
class DesignWindowLoader extends \System\Object
{
	/**
	 * @uses DesignWindowLoaderMethodsOverride::LoadDesignerWindow_1 ($xaml, $assemblyPath, $xamlFileProjectPath)
	 * @uses DesignWindowLoaderMethodsOverride::LoadDesignerWindow_2 ($xaml, $assemblyPath, $xamlFileProjectPath, $renderScaling)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadDesignerWindow(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
