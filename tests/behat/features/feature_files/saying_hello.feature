Feature: Being greeted by name
  In order to be greeted by name
  As a person with a name
  I want to give my name and be greeted.


  @critical
  Scenario: Being greeted by name
    Given my name is 'Sam'
    When I ask to be said hello to
    Then I should see 'Hello, Sam'


  Scenario: Being greeted by name, with a more complicated name
    Given my name is 'fdslnfdslgdskglns'
    When I ask to be said hello to
    Then I should see 'Hello, fdslnfdslgdskglns'
