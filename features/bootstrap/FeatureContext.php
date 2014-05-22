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
use app\mock\service as MockService;

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
        $this->sessionService = new MockService\Session;
    }

    /**
     * @Given /^following users:$/
     */
    public function followingUsers(TableNode $table)
    {
        $hash = $table->getHash();
        foreach ($hash as $row) {

            $data = [
                'id' => $row['id'],
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
    public function iAmARegisteredUser($login)
    {
        $user = $this->userRepo->getByLogin($login);
        if (empty($user)) {
            // TODO fix exception type
            throw new Exception('No user found');
        }
        
        $this->sessionService->setLoggedInUserId($user->id);
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

    /**
     * @Given /^there are root tasks:$/
     */
    public function thereAreRootTasks(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @When /^I get root task list$/
     */
    public function iGetRootTaskList()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I receive the following list:$/
     */
    public function iReceiveTheFollowingList(TableNode $table)
    {
        throw new PendingException();
    }

}
