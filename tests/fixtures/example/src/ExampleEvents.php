<?php

namespace Drupal\example;

/**
 * Defines the events the Example module dispatches.
 */
final class ExampleEvents {

  /**
   * Occurs when an example is saved.
   *
   * @see \Drupal\example\ExampleService
   */
  const string SAVE = 'example.save';

}
