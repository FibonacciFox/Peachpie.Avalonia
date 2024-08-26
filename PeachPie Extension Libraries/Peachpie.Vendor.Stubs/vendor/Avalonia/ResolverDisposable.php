<?php
namespace Avalonia;
class ResolverDisposable extends \System\Object implements
	\System\IDisposable
{

	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @param \Avalonia\AvaloniaLocator $mutable
	 */
	public function __construct($resolver, $mutable){}
}