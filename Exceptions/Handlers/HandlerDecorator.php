<?php

declare(strict_types=1);

namespace Modules\Xot\Exceptions\Handlers;

use Throwable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Console\Output\OutputInterface;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * The exception handler decorator.
 */
class HandlerDecorator implements ExceptionHandler
{
    /**
     * The custom handlers repository.
     */
    protected HandlersRepository $repository;

    /**
     * Set the dependencies.
     * The default Laravel exception handler.
     */
    public function __construct(
        protected ExceptionHandler $defaultHandler, HandlersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Report or log an exception.
     *
     * @throws Throwable
     */
    public function report(Throwable $e)
    {
        foreach ($this->repository->getReportersByException($e) as $reporter) {
            if ($report = $reporter($e)) {
                return $report;
            }
        }

        $this->defaultHandler->report($e);
    }

    /**
     * Register a custom handler to report exceptions.
     *
     * @return int
     */
    public function reporter(callable $reporter)
    {
        return $this->repository->addReporter($reporter);
    }

    /**
     * Render an exception into a response.
     *
     * @param Request $request
     *
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $e)
    {
        foreach ($this->repository->getRenderersByException($e) as $renderer) {
            if ($render = $renderer($e, $request)) {
                return $render;
            }
        }

        return $this->defaultHandler->render($request, $e);
    }

    /**
     * Register a custom handler to render exceptions.
     *
     * @return int
     */
    public function renderer(callable $renderer)
    {
        return $this->repository->addRenderer($renderer);
    }

    /**
     * Render an exception to the console.
     *
     * @param OutputInterface $output
     */
    public function renderForConsole($output, Throwable $e)
    {
        foreach ($this->repository->getConsoleRenderersByException($e) as $renderer) {
            if ($render = $renderer($e, $output)) {
                return $render;
            }
        }

        $this->defaultHandler->renderForConsole($output, $e);
    }

    /**
     * Register a custom handler to render exceptions in console.
     *
     * @return int
     */
    public function consoleRenderer(callable $renderer)
    {
        return $this->repository->addConsoleRenderer($renderer);
    }

    /**
     * Determine if the exception should be reported.
     *
     * @return bool
     */
    public function shouldReport(Throwable $e)
    {
        return $this->defaultHandler->shouldReport($e);
    }

    /**
     * Proxy other calls to default Laravel exception handler.
     *
     * @param string $name
     * @param array  $parameters
     */
    public function __call($name, $parameters): mixed
    {
        /**
         * @var callable
         */
        $callable = [$this->defaultHandler, $name];

        return call_user_func_array($callable, $parameters);
    }
}
