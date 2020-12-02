<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_js_routing.dump_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\jsrouting-bundle\\Command\\DumpCommand.php';

$this->services['fos_js_routing.dump_command'] = $instance = new \FOS\JsRoutingBundle\Command\DumpCommand(${($_ = isset($this->services['fos_js_routing.extractor']) ? $this->services['fos_js_routing.extractor'] : $this->load('getFosJsRouting_ExtractorService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_js_routing.serializer']) ? $this->services['fos_js_routing.serializer'] : $this->load('getFosJsRouting_SerializerService.php')) && false ?: '_'}, $this->targetDirs[3], NULL);

$instance->setName('fos:js-routing:dump');

return $instance;
