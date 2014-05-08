<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

require_once 'app/mock/repository/User.php';

use app\mock\repository as MockRepo;
use app\repository as Repo;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^following users:$/
     */
    public function followingUsers(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I am a registered user "([^"]*)"$/
     */
    public function iAmARegisteredUser($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I create a task with the following information$/
     */
    public function iCreateATaskWithTheFollowingInformation(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @Then /^task should be created$/
     */
    public function taskShouldBeCreated()
    {
        throw new PendingException();
    }

    /**
     * @Then /^task should not be created$/
     */
    public function taskShouldNotBeCreated()
    {
        throw new PendingException();
    }

    /**
     * @Given /^error message should be returned$/
     */
    public function errorMessageShouldBeReturned(PyStringNode $string)
    {
        throw new PendingException();
    }
}
