Parallel
========

This is a prototype library for introducing Parallelization into your project.
Currently this is a prototype and thus not production ready.

Theory of Operation
-------------------

This library will enable the developer to execute a given amount of tasks (workers) in parallel. This is achieved by
adding workers onto a manager, optionally defining how many processes to max. run simultaneously (defaults to 2) and
then execute the manager.

The goal for this component is to capture the STDOUT, STDERR, return code and return information (such as an array or
string).

Requirements and graceful degradation
-------------------------------------

Parallelization has several requirements, to allow distribution without adding several requirements to your application
will this library execute the given tasks in series if the requirements are not met and throw a E_USER_NOTICE php error
that explains to the user that dependencies are missing.

The requirements for this library are:

* A *NIX compatible operating system
* the PCNTL PHP extension (http://php.net/manual/en/book.pcntl.php)
* the SHMOP PHP extension (http://php.net/manual/en/book.shmop.php)
* Scripts must not run from an apache module

TODO
----

* Graceful degradation if requirements are not met
* IPC (Inter-Process Communication), to be able to return information from Workers to the Manager.
  * STDOUT
  * STDERR
  * Error Code
  * Return information