Feature: create a task
	In order to organize my time
	As a registered user
	I need to create a task or a subtask

	Background:
		Given following users:
		| id  | login  | password   | email             |
		| 1	  | user   | pass123    | user@example.com  |
		
	Scenario: User creates a root task with valid data
		Given I am a registered user "user"
		When I create a task with the following information
		| title         | test              |
		| description   | test description  |
		Then task should be created

	Scenario: User creates a root task with invalid data
		Given I am a registered user "user"
		When I create a task with the following information
		| title         |                   |
		| description   | test description  |
		Then task should not be created
		And error message should be returned
		"""
		Title is required
		"""