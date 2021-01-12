<?php

require_once 'vendor/autoload.php';

use Jaeger\Config;
use OpenTracing\GlobalTracer;

$config = new Config(
    [
        'sampler' => [
            'type' => Jaeger\SAMPLER_TYPE_CONST,
            'param' => true,
        ],
        'logging' => true,
    ],
    'your-app-name'
);

$config->initializeTracer();

$tracer = GlobalTracer::get();

$scope = $tracer->startActiveSpan('TestSpan', []);
$scope->close();

$tracer->flush();

echo 'test';
