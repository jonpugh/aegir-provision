<?php

namespace Aegir\Provision\Server;

class Project {

  /**
   * @var string
   */
  public $hostname;

  /**
   * @var string
   * Git repo URL, Makefile URL, or Composer.json URL?
   */
  public $ip_addresses;

  /**
   * @var Service[]
   */
  public $services;

  /**
   * Initiate the server
   */
  public function __construct($hostname, $ip_addresses, $services) {
    $this->hostname = $hostname;
    $this->ip_addresses = $ip_addresses;
    $this->services = $services;
  }
}