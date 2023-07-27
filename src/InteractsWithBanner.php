<?php

namespace Laravel\Jetstream;

use function Termwind\style;

trait InteractsWithBanner
{
    /**
     * Update the banner message.
     *
     * @param  string  $message
     * @return void
     */
    protected function banner($message)
    {
        $this->dispatch('banner-message', style: 'success', message: $message);
    }

    /**
     * Update the banner message with an danger / error message.
     *
     * @param  string  $message
     * @return void
     */
    protected function dangerBanner($message)
    {
        $this->dispatch('banner-message', style: 'danger', message: $message );
    }
}
