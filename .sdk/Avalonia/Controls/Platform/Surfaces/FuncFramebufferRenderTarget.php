<?php
namespace Avalonia\Controls\Platform\Surfaces;
class FuncFramebufferRenderTarget extends \System\Object implements
	\Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget,
	\System\IDisposable
{


	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public function Lock(){}
	/**
	 * @param \System\Func_1 $lockFramebuffer [generic: Avalonia\Platform\ILockedFramebuffer]
	 */
	public function __construct($lockFramebuffer){}
}