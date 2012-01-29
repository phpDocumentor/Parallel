Parallel
========

This is a prototype library for introducing Parallelization into your project.
Currently this is a prototype and thus not production ready.

See the `example.php` file for an example how to use this library.

Theory of Operation
-------------------

This library will enable the developer to execute a given amount of tasks
(workers) in parallel. This is achieved by adding workers onto a manager,
optionally defining how many processes to max. run simultaneously (defaults to 2)
and then execute the manager.

The goal for this component is to capture the STDOUT, STDERR, return code and
return information (such as an array or string).

Requirements and graceful degradation
-------------------------------------

Parallelization has several requirements, to allow distribution without adding
several requirements to your application will this library execute the given
tasks in series if the requirements are not met and throw a E_USER_NOTICE php
error that explains to the user that dependencies are missing.

The requirements for this library are:

* A *NIX compatible operating system
* the PCNTL PHP extension (http://php.net/manual/en/book.pcntl.php)
* Scripts must not run from an apache module

Errors and exceptions
---------------------

if a task throws an exception it is caught and registered as an error. The
exception's code is used as error number, where the message is used as error
message.

By using this, instead of dying, you can continue execution of the other parallel
processes and handle errors yourself after all processes have been executed.

TODO
----

* Improve docs
* More intelligent process slots; currently only the oldest in a 'set' of slots
  is waited on but if this runs for a longer time then the other slots than
  those will not be filled as long as the first slot is occupied.
* Last parts of IPC (Inter-Process Communication), to be able to return
  information from Workers to the Manager.

  * STDOUT
  * STDERR

