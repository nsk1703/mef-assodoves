<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'white_october.tcpdf' shared service.

include_once $this->targetDirs[3].'/vendor/whiteoctober/tcpdf-bundle/Controller/TCPDFController.php';
include_once ($this->targetDirs[3].'/app/../vendor/tecnickcom/tcpdf/tcpdf.php');

return $this->services['white_october.tcpdf'] = new \WhiteOctober\TCPDFBundle\Controller\TCPDFController('TCPDF');
