<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Formatters;

use Illuminate\Support\Facades\Auth;

// use Symfony\Component\HttpFoundation\Request;

class WebhookErrorFormatter
{
    private \Throwable $exception;

    // private Request $request;

    public function __construct(\Throwable $exception)
    {
        $this->exception = $exception;
        // $this->request = $request;
    }

    public function format(): array
    {
        return [
            'exception' => '`'.get_class($this->exception)."` (Code `{$this->exception->getCode()}`)",
            'thrown_in' => "`{$this->exception->getFile()}`:{$this->exception->getLine()}",
            'user' => sprintf(
                '%d <%s>',
                Auth::id(),
                Auth::user()?->email ?? 'CLI User'
            ),
            'thrown_while_calling' => sprintf(
                '[%s] %s',
                request()->getMethod(),
                request()->fullUrl()
            ),
            'exception_details' => sprintf(
                "Trace:\n```json \n %s \n ```\n\n Previous: \n `%s`",
                json_encode($this->exception->getTrace(), JSON_PRETTY_PRINT),
                $this->exception->getPrevious() ? ('`'.get_class($this->exception->getPrevious()).'`') : 'None'
            ),
        ];
    }
}
