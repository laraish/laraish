<?php

namespace App\Http\Middleware;

class ShareViewData
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $this->shareViewData();

        return $next($request);
    }

    private function shareViewData()
    {
        // view()->share('key', 'value');
    }
}
