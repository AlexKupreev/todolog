Feature: list tasks
	In order to view my tasks
	As a registered user
	I need to view tasks

	Background:
		Given following users:
		| id  | login  | password   | email             |
		| 1	  | user   | pass123    | user@example.com  |
		
	Scenario: User gets empty root task list
		Given I am a registered user "user"
		And there are root tasks:
		| title | description |
		When I get root task list
		Then I receive the following list:
		| title | description |