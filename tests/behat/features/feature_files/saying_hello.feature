Feature: Being greeted by name
  In order to be greeted by name
  As a person with a name
  I want to give my name and be greeted.

  @wip
  Scenario: Being greeted by name
    Given My name is Sam
    When I ask to be said hello to
    Then I should see 'Hello, Sam'
