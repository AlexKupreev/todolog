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

require_once 'vendor/autoload.php';

use app\mock\repository as MockRepo;
use app\repository as Repo;
use app\service as Service;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    protected $userRepo;
    protected $passwordService;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->userRepo = new MockRepo\User;
        $this->passwordService = new Service\Password;
    }

    /**
     * @Given /^following users:$/
     */
    public function followingUsers(TableNode $table)
    {
        $hash = $table->getHash();
        foreach ($hash as $row) {

            $data = [
                'login' => $row['login'],
                'password' => $this->passwordService->hash($row['password']),
                'email' => $row['email'],
            ];
            $this->userRepo->create($data);
        }
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
