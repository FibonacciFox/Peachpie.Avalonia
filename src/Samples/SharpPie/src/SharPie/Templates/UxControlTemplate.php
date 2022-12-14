<?php

namespace SharPie\Templates;

use Peachpie\Avalonia\ControlsTemplates\EventsTemplates\ControlEventsTemplate;
use Closure;

trait UxControlTemplate
{
    #Events
    /**
     * Occurs when the user has completed a context input gesture, such as a right-click.
     * @param Closure $callback
     * @return $this
     */
    public function on_ContextRequested($callback) {
        return ControlEventsTemplate::OnContextRequested($this, $callback);
    }

    /**
     * Occurs when the control has been fully constructed in the visual tree and both
     * layout and render are complete.
     * @param Closure $callback
     * @return $this
     */
    public function on_Loaded($callback) {
        return ControlEventsTemplate::OnLoaded($this, $callback);
    }

    /**
     * Occurs when the control is removed from the visual tree.
     * @param Closure $callback
     * @return $this
     */
    public function on_Unloaded($callback) {
        return ControlEventsTemplate::OnUnloaded($this, $callback);
    }

    /**
     * Occurs when the bounds (actual size) of the control have changed.
     * @param Closure $callback
     * @return $this
     */
    public function on_SizeChanged($callback) {
        return ControlEventsTemplate::OnSizeChanged($this, $callback);
    }
}